<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    function index() {
        $courses = \App\Course::all();
        return view('courses.index', compact('courses'));
    }
}
