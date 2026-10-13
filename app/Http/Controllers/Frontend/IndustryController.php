<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class IndustryController extends Controller
{
    public function index()
    {
        $categories = json_decode(
            File::get(resource_path('data/categories.json')),
            true
        );

        $courses = json_decode(
            File::get(resource_path('data/courses.json')),
            true
        );

        return view('frontend.pages.industry.index', [
            'category' => null,
            'categories' => $categories,
            'courses' => $courses,
        ]);
    }

    public function categoryCourses(string $slug)
    {
        $categories = json_decode(
            File::get(resource_path('data/categories.json')),
            true
        );

        $courses = json_decode(
            File::get(resource_path('data/courses.json')),
            true
        );

        $category = collect($categories)->firstWhere('slug', $slug);

        abort_if(!$category, 404);

        $courses = collect($courses)
            ->where('category_slug', $slug)
            ->values()
            ->all();

        // return $courses;

        return view('frontend.pages.industry.index', [
            'category' => $category,
            'categories' => $categories,
            'courses' => $courses,
        ]);
    }

public function show(string $courseslug)
{
   
    $courses = json_decode(
        File::get(resource_path('data/courses.json')),
        true
    );

    $course = collect($courses)->firstWhere('slug', $courseslug);

    abort_if(!$course, 404);
        // return $course;

    return view('frontend.pages.industry.show', compact('course'));
}

    public function industryEnrollment()
    {
        return view('frontend.pages.industry.enrollment');
    }

    public function courseEnrollment()
    {
        return view('frontend.pages.industry.enrollment');
    }
}
