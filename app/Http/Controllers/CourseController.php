<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    //Exibe view da página de Cursos - Geral:
    public function viewCourses(Request $request){
        return view('courses');
    }

    //Exibe view da página de Detalhe de Cada Curso:
    public function viewCourseDetail(Request $request){
    return view('course-detail');
}

}
