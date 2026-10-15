<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Enroll;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Throwable;

class EnrollController extends Controller
{

    public function enroll(Request $request): RedirectResponse
    {
        /*
        |--------------------------------------------------------------------------
        | Validation
        |--------------------------------------------------------------------------
        */

        $rules = [
            'form_type' => [
                'required',
                'in:consultation',
            ],

            'full_name' => [
                'required',
                'string',
                'max:255',
            ],

            'phone' => [
                'required',
                'string',
                'max:30',
            ],

            'email' => [
                'required',
                'email',
                'max:255',
            ],

            'qualification' => [
                'required',
                'string',
                'max:255',
            ],

            'preferred_pathway' => [
                'required',
                'in:online,blended,workplace,rpl',
            ],

            'terms_accepted' => [
                'required',
                'accepted',
            ],
        ];

        $messages = [
            'full_name.required' => 'Please enter your full name.',
            'full_name.max' => 'Your name cannot exceed 255 characters.',

            'phone.required' => 'Please enter your mobile number.',
            'phone.max' => 'Your mobile number is too long.',

            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',

            'qualification.required' => 'Please select a target qualification.',
            'preferred_pathway.required' => 'Please select your preferred pathway.',
            'preferred_pathway.in' => 'Please select a valid preferred pathway.',

            'terms_accepted.required' => 'Please provide your consent before submitting.',
            'terms_accepted.accepted' => 'You must provide your consent before submitting.',
        ];

        $validator = Validator::make(
            $request->all(),
            $rules,
            $messages
        );

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = $validator->validated();

        /*
        |--------------------------------------------------------------------------
        | Split Full Name
        |--------------------------------------------------------------------------
        */

        $nameParts = preg_split(
            '/\s+/u',
            trim($data['full_name']),
            2
        );

        $firstName = $nameParts[0];
        $lastName = $nameParts[1] ?? '';

        /*
        |--------------------------------------------------------------------------
        | Resolve Qualification Name
        |--------------------------------------------------------------------------
        */

        $qualificationName = $data['qualification'];

        try {
            $coursesPath = resource_path('data/courses.json');

            if (File::exists($coursesPath)) {
                $courses = json_decode(
                    File::get($coursesPath),
                    true
                );

                if (is_array($courses)) {
                    $course = collect($courses)->firstWhere(
                        'code',
                        $data['qualification']
                    );

                    if ($course) {
                        $qualificationName =
                            ($course['code'] ?? '') . ' ' .
                            ($course['name'] ?? $course['title'] ?? '');
                    }
                }
            }
        } catch (Throwable $e) {
            // Keep the submitted qualification code if lookup fails.
            Log::warning('Qualification lookup failed', [
                'error' => $e->getMessage(),
            ]);
        }

        /*
        |--------------------------------------------------------------------------
        | Save Enrollment
        |--------------------------------------------------------------------------
        */

        try {
            $application = Enroll::create([
                'form_type' => 'consultation',

                'first_name' => $firstName,
                'last_name' => $lastName,

                'email' => $data['email'],
                'phone' => $data['phone'],

                // This form does not collect industry.
                'industry' => null,

                'qualification' => $data['qualification'],
                'preferred_pathway' => $data['preferred_pathway'],
                'terms_accepted' => true,
            ]);
        } catch (Throwable $e) {
            Log::error('Enrollment save failed', [
                'error' => $e->getMessage(),
            ]);

            return redirect()
                ->back()
                ->withInput()
                ->with(
                    'error',
                    'We could not submit your request. Please try again.'
                );
        }

        /*
        |--------------------------------------------------------------------------
        | Send Notification Email
        |--------------------------------------------------------------------------
        */

        try {
            $emailBody =
                "Application ID: {$application->id}\n" .
                "Form Type: {$application->form_type}\n" .
                "Name: {$firstName} {$lastName}\n" .
                "Phone: {$application->phone}\n" .
                "Email: {$application->email}\n" .
                "Industry: Not applicable\n" .
                "Qualification: {$qualificationName}\n" .
                "Preferred Pathway: {$application->preferred_pathway}\n" .
                "Contact Consent: Yes\n";

            Mail::raw($emailBody, function ($message) {
                $message
                    ->to('mannan.hbdservices@gmail.com')
                    ->subject('New Consultation Request - Nubex College');
            });
        } catch (Throwable $e) {
            // Email failure must not undo a successfully saved enrollment.
            Log::error('Enrollment email failed', [
                'application_id' => $application->id,
                'error' => $e->getMessage(),
            ]);
        }

        /*
        |--------------------------------------------------------------------------
        | Redirect With Success Message
        |--------------------------------------------------------------------------
        */

        return redirect()
            ->back()
            ->with(
                'success',
                'Thank you! Your request has been submitted successfully.'
            );
    }
}
