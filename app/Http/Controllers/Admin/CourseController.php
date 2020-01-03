<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\{Course, Category, Company};
use Illuminate\Http\Request;

class CourseController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $courses = Course::all();
    $categories = Category::all();
    $companies = Company::all();
    return view('admin.courses.create', compact('courses', 'categories', 'companies'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */

  // Método para salvar novo curso
  public function store(Request $request)
  {
    // dd($request);
    Course::create([
      'name' => $request->courseName,
      'description' => $request->courseDescription,
      'duration' => $request->courseDuration,
      'start' => $request->courseStart,
      'end' => $request->courseEnd,
      'status' => $request->courseStatus,
      'category_id' => $request->courseCategory,
      'company_id' => $request->courseCompany
    ]);

    //Enviando mensagem de inserção com sucesso (aparece apenas a primeira vez):
    /* $request->session()->flash('message', "Curso inserido com sucesso");*/

    return redirect('/admin/courses/create');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Course  $course
   * @return \Illuminate\Http\Response
   */
  public function show(Course $course)
  {
    //
  }


  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Course  $course
   * @return \Illuminate\Http\Response
   */
  public function edit(Course $course)
  {
    $categories = Category::all();
    $companies = Company::all();

    return view('admin.courses.edit', ['course' => $course, 'categories' => $categories, 'companies' => $companies]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Course  $course
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Course $course)
  {
    $course->name = $request->courseName;
    $course->description = $request->courseDescription;
    $course->duration = $request->courseDuration;
    $course->start = $request->courseStart;
    $course->end = $request->courseEnd;
    $course->status = $request->courseStatus;
    $course->category_id = $request->courseCategory;
    $course->company_id = $request->courseCompany;
    $course->status = $request->courseStatus;
    $course->save();
    return redirect('/admin/courses/create');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Course  $course
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    // dd($id);

    $result = Course::destroy($id);
    if ($result) {
      return redirect('/admin/courses/create');
    }
    /*     $request->session()->flash(
        'mensagem', 
        "Série excluida com sucesso:"
    ); */
  }
}
