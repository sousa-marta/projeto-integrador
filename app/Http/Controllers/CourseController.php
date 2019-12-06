<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function viewCourses(Request $request){
        return view('courses');
    }
}
