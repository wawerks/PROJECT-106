<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course; // Import the Course model

class CourseController extends Controller
{
    public function index()
    {
        // Retrieve all courses
        $courses = Course::all();
        // return $courses;
        // Pass the courses to the view
        return view('pages.course', ['courses' => $courses]); // Use 'courses' as variable name
    }
}
