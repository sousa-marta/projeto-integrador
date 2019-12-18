<?php

namespace App\Http\Controllers;

use App\Http\Requests\VacanciesFormRequest;
use App\{Category, Vacancy, Company};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VacancyController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('vacancies.index');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create(Request $request)
  {
    $categories = Category::query()->orderBy('name')->get();
    $companies = Company::query()->orderBy('name')->get();
    $vacancies = DB::table('vacancies')
      ->join('categories', 'categories.id', '=', 'vacancies.category_id')
      ->join('companies', 'companies.id', '=', 'vacancies.company_id')
      ->select('vacancies.*', 'companies.name as company_name', 'categories.name as category_name')
      ->orderBy('name')
      ->get();
    // var_dump($vacancies);
    // exit;
    $message = $request->session()->get('message');
    return view('vacancies.create',compact('vacancies','message','categories','companies'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(VacanciesFormRequest $request)
  {
    Vacancy::create(['name' => $request->name,'phone' => $request->phone, 'email' => $request->email, 'description' => $request->description, 'wage' => $request->wage, 'status' => $request->status, 'city' => $request->city, 'category_id' => $request->category, 'company_id' => $request->company]);
    $request->session()->flash('message', "A vaga {$request->name} foi salva com sucesso");
    return redirect('/vacancies/create');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Vacancy  $vacancy
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  { 
    $vacancy = Vacancy::find($id);
    $category = $vacancy->category;
    $company = $vacancy->company;
    $categoriesList = Category::query()->orderBy('name')->get();
    $companiesList = Company::query()->orderBy('name')->get();
    return view('vacancies.show',compact('vacancy','category','company','categoriesList','companiesList'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Vacancy  $vacancy
   * @return \Illuminate\Http\Response
   */
  public function edit(Vacancy $vacancy)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Vacancy  $vacancy
   * @return \Illuminate\Http\Response
   */
  public function update(VacanciesFormRequest $request, Vacancy $vacancy)
  {
    $vacancy->name = $request->name;
    $vacancy->status = $request->status;
    $vacancy->phone = $request->phone;
    $vacancy->email = $request->email;
    $vacancy->description = $request->description;
    $vacancy->wage = $request->wage;
    $vacancy->city = $request->city;
    $vacancy->category_id = $request->category;
    $vacancy->company_id = $request->company;
    $vacancy->save();
    $request->session()->flash('message', 'Successfully modified the task!');
    return redirect()->route('vacancies.show', [$vacancy]);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Vacancy  $vacancy
   * @return \Illuminate\Http\Response
   */
  public function destroy(Request $request, Vacancy $vacancy)
  {
    $vacancy->delete();
    $request->session()->flash('message', 'Successfully deleted the task!');
    return redirect('/vacancies/create');
  }
}
