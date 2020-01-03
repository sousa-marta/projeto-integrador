<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//para buscar informações do número de cadastros na página geral de admin
use App\{Category, Company, Course, User, Vacancy, Volunteer};
// use App\Donation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
  public function index(Request $request)
  {
    return view('home');
  }

  public function viewAbout(Request $request)
  {
    return view('about');
  }

  public function viewSupport(Request $request)
  {
    return view('support');
  }

  public function viewContribute(Request $request)
  {
    return view('contribute');
  }

  public function viewContact(Request $request)
  {
    return view('contact');
  }

  public function viewAdmin(Request $request)
  {
    $companies = Company::all();
    $volunteers = Volunteer::all();
    $users = User::all();
    $vacancies = Vacancy::all();
    $courses = Course::all();
    return view('admin.index', [
      "companies" => $companies,
      "volunteers" => $volunteers,
      "users" => $users,
      "vacancies" => $vacancies,
      "courses" => $courses
    ]);
  }

  public function viewVacancies()
  {
    // Puxando apenas a coluna 'name' de categorias para usar no filtro
    $categories = DB::table('categories')->select('name')->orderBy('name')->get();
    $vacancies = DB::table('vacancies')
      ->join('categories', 'categories.id', '=', 'vacancies.category_id')
      ->join('companies', 'companies.id', '=', 'vacancies.company_id')
      ->select('vacancies.*', 'companies.name as company_name', 'companies.logo as company_logo', 'categories.name as category_name')
      ->orderBy('name')
      ->get();
    return view('vacancies', compact('vacancies', 'categories'));
  }

  public function viewCourses()
  {
    $courses = Course::all();
    $categories = Category::all();
    $companies = Company::all();

    return view('courses.index', compact('courses', 'categories', 'companies'));

    // return view('courses.index', compact('courses',$courses));
  }

  public function showCourse($id)
  {
    $course = Course::find($id);
    $courses = Course::all();
    return view('courses.show', compact('course', 'courses'));
  }

  public function logIn(Request $request)
  {
    if (!Auth::attempt($request->only(['email', 'password']))) {
      return redirect()->back()->withErrors('Usuário e/ou senha incorretos');
    }

    if (Auth::user()->email == 'admin@admin.com') {
      return redirect('/admin');
    }

    return redirect()->back();
  }
}
