<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Counsellor;
use App\Models\Course;
use Illuminate\Support\Facades\File;

class FrontendController extends Controller
{


    public function homePage()
    {
          $categories = json_decode(
            File::get(resource_path('data/categories.json')),
            true
        );

      $courses = collect(json_decode(
    File::get(resource_path('data/courses.json')),
    true
))->where('demand', 'High')->values()->all();

        // return $courses;

        return view('frontend.pages.home.home', compact('categories', 'courses'));
    }

    public function aboutPage()
    {
        
        return view('frontend.pages.about.about');
    }

    public function contactPage()
    {
        return view('frontend.pages.contact');
    }
   
    public function registration()
    {
        return view('frontend.pages.register');
    }

      public function login()
    {
        return view('frontend.pages.login');
    }
    public function achieve(){
        return view('frontend.pages.achieve.achieve');
    }

    public function destinations(){
        return view('frontend.pages.destinations.index');
    }
     public function howWeWork(){
        return view('frontend.pages.how-we-works.index');
    }
    public function privacyPolicy(){
        return view('frontend.pages.privacy-policy');
    }
    public function termsConditions(){
        return view('frontend.pages.terms-conditions');
    }

    public function owner(){
        return view('frontend.pages.teams.owner');
    }
     public function patners(){
        return view('frontend.pages.patner.index');
    }
      public function faqs(){
        return view('frontend.pages.faq.index');
    }

        public function internationalInquiry(){
        return view('frontend.pages.international.index');
    }

    public function gsGuide(){
        return view('frontend.pages.international.gs-guide');
    }

    public function agentRegister(){
        return view('agent.register');
    }

     public function studentSupport(){
        return view('frontend.pages.student-support.index');
    }
     public function studentResources(){
        return view('frontend.pages.student-support.resources');
    }

     public function admissionFees(){
        return view('frontend.pages.admission.fees');
    }
}
