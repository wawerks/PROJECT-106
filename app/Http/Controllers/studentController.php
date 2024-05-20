<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function student()
    {
        // Retrieve all students
        $students = student::all();
        // return $students;
        // Pass the students to the view
        return view('pages.student', ['students' => $students]); // Change 'student' to 'students'
    }
}
