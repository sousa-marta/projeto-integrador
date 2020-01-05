<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\VacanciesFormRequest;
use App\Vacancy;
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
    //
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create(Request $request)
  {
    $categories = DB::table('categories')->select('name', 'id')->orderBy('name')->get();
    $companies = DB::table('companies')->select('name', 'id')->orderBy('name')->get();
    $vacancies = DB::table('vacancies')
      ->join('categories', 'categories.id', '=', 'vacancies.category_id')
      ->join('companies', 'companies.id', '=', 'vacancies.company_id')
      ->select('vacancies.*', 'companies.name as company_name', 'companies.logo as company_logo', 'categories.name as category_name')
      ->orderBy('name')
      ->get();
    $message = $request->session()->get('message');
    return view('admin.vacancies.create', compact('vacancies', 'message', 'categories', 'companies'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(VacanciesFormRequest $request)
  {
    Vacancy::create(['name' => $request->name, 'phone' => $request->phone, 'email' => $request->email, 'description' => $request->description, 'wage' => $request->wage, 'status' => $request->status, 'city' => $request->city, 'category_id' => $request->category, 'company_id' => $request->company]);
    $request->session()->flash('message', "A vaga {$request->name} foi salva com sucesso");
    return redirect('/admin/vacancies/create');
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
    $categoriesList = DB::table('categories')->select('name', 'id')->orderBy('name')->get();
    $companiesList = DB::table('companies')->select('name', 'id')->orderBy('name')->get();
    return view('admin.vacancies.show', compact('vacancy', 'category', 'company', 'categoriesList', 'companiesList'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Vacancy  $vacancy
   * @return \Illuminate\Http\Response
   */
  public function edit(Vacancy $vacancy)
  {
    //O método edit está em modal dentro da página show
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
    $request->session()->flash('message', "Vaga {$request->name} atualizada!");
    return redirect()->route('admin.vacancies.show', [$vacancy]);
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
    $request->session()->flash('message', "Vaga {$vacancy->name} deletada!");
    return redirect()->back();
  }
}
