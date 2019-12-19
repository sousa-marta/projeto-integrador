<?php

namespace App\Http\Controllers;

use App\Course;
use App\Category;
use App\Company;
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
    $courses = Course::all();
    $categories = Category::all();
    $companies = Company::all();

    return view('courses.index',compact('courses','categories','companies'));

    // return view('courses.index', compact('courses',$courses));
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
    return view('courses.create',compact('courses','categories','companies'));
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

    return redirect('/courses/create'); 
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Course  $course
   * @return \Illuminate\Http\Response
   */
  public function show()
  {
    //
    return view('courses.show');

    //Assim que ficar dinâmico, pra receber o id é só substituir o código acima por:
    /*public function show(Course $course)
        {
        return view('courses.show',compact('course',$course));
        }*/
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

    return view('courses.edit',['course' => $course, 'categories' => $categories, 'companies'=> $companies]);
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
    $course->save();
    return redirect('/courses/create');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Course  $course
   * @return \Illuminate\Http\Response
   */
  public function destroy($id){
    // dd($id);

    $result = Course::destroy($id);
    if($result){
      return redirect('/courses/create'); 
    }
/*     $request->session()->flash(
        'mensagem', 
        "Série excluida com sucesso:"
    ); */    
    

  }
}
