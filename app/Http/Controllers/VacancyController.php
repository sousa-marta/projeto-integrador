<?php

namespace App\Http\Controllers;

use App\Http\Requests\VacanciesFormRequest;
use App\{Category, Vacancy};
use App\Services\VacancyCreator;
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
    // $vacancies = Vacancy::query()->orderBy('name')->get();
    // foreach ($vacancies as $vacancy) {
      // $category = DB::table('categories')->where('id', $vacancy->category_id)->get();
      // var_dump($category[0]->name);
      // exit;
    // }
    // $vacancy->location()->create(['location' => $location_id]);
    // $vacancy->company()->create(['company' => $company_id]);
    $vacancies = DB::table('vacancies')
      ->join('categories', 'categories.id', '=', 'vacancies.category_id')
      ->join('locations', 'locations.id', '=', 'vacancies.location_id')
      ->join('companies', 'companies.id', '=', 'vacancies.company_id')
      ->select('vacancies.*', 'companies.name as company_name', 'locations.city', 'categories.name as category_name')
      ->get();
    var_dump($vacancies);
    // exit;
    $message = $request->session()->get('message');
    return view('vacancies.create',compact('vacancies','message'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(VacanciesFormRequest $request, VacancyCreator $vacancyCreator)
  {
    $vacancy = $vacancyCreator->createVacancy($request->name,$request->phone,$request->email,$request->description,$request->wage,$request->state,$request->category,$request->location,$request->company);
    $request->session()->flash('mensagem', "Inserir mensagem aqui");
    return redirect('/vacancies/'.$vacancy->id);
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Vacancy  $vacancy
   * @return \Illuminate\Http\Response
   */
  public function show(Vacancy $vacancy)
  {
    //
    //Assim que ficar dinâmico, pra receber o id é só substituir o código acima por:
    /*public function show(Vacancy $vacancy)
        {
        return view('vacancies.show',compact('vacancy',$vacancy));
        }*/ }

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
  public function update(Request $request, Vacancy $vacancy)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Vacancy  $vacancy
   * @return \Illuminate\Http\Response
   */
  public function destroy(Vacancy $vacancy)
  {
    //
  }
}
