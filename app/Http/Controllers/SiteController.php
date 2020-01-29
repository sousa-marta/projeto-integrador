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

  public function filteredVacancies($id)
  {
    $course = Course::find($id);
    if($course == NULL) {
      return redirect()->route('vacancies')->with('noneFound',"Neste momento, não há vagas relacionadas ao curso que buscou. Aproveite para ver outras vagas abaixo!");
    }

    $courseCategory = $course->category_id;
    $vacanciesSameCategory = Vacancy::where('category_id','=',$courseCategory)->get();
    if(!$vacanciesSameCategory->count()) {
      return redirect()->route('vacancies')->with('noneFound',"Neste momento, não há vagas relacionadas ao curso que buscou. Aproveite para ver outras vagas abaixo!");
    }

    $categories = DB::table('categories')->select('name')->orderBy('name')->get();
    $vacancies = DB::table('vacancies')
      ->join('categories', 'categories.id', '=', 'vacancies.category_id')
      ->join('companies', 'companies.id', '=', 'vacancies.company_id')
      ->select('vacancies.*', 'companies.name as company_name', 'companies.logo as company_logo', 'categories.name as category_name')
      ->where('category_id','=',$courseCategory)
      ->orderBy('name')
      ->get();
    

    return view('vacancies', compact('vacancies','categories'));    
  }

  public function filteredCourses($id)
  {
    $vacancy = Vacancy::find($id);
    if($vacancy == NULL) {
      return redirect()->route('courses.index')->with('noneFound',"Neste momento, não há cursos relacionados à vaga que buscou. Aproveite para ver outros cursos abaixo!");
    }

    $vacancyCategory = $vacancy->category_id;
    $coursesSameCategory = Course::where('category_id','=',$vacancyCategory)->get();
    if(!$coursesSameCategory->count()) {
      return redirect()->route('courses.index')->with('noneFound',"Neste momento, não há cursos relacionados à vaga que buscou. Aproveite para ver outros cursos abaixo!");
    }

    $categories = Category::all();
    $courses = DB::table('courses')
      ->join('categories', 'categories.id', '=', 'courses.category_id')
      ->join('companies', 'companies.id', '=', 'courses.company_id')
      ->select('courses.*', 'companies.name as company_name', 'companies.logo as company_logo', 'categories.name as category_name','categories.img as category_img')
      ->where('category_id','=',$vacancyCategory)
      ->orderBy('name')
      ->get();

    return view('courses.index', compact('vacancy','courses','categories'));
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
    $courseCategory = $course->category_id;

    //Enviando para view todos as rows de courses exceto do $id do curso em questão:
    $coursesSameCategory = Course::where('category_id','=',$courseCategory)
                                 ->where('id','!=',$id)
                                 ->get();

    return view('courses.show', compact('course', 'coursesSameCategory'));
  }
}