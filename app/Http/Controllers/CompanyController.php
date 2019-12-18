<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
    return view('companies.create');//
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create(Request $request)
  {
    $newCompany = new Company();
    $newCompany->name = $request->name;
    $newCompany->logo = $request->logo;
    $newCompany->POC = $request->POC;
    $newCompany->phone = $request->phone;
    $newCompany->email = $request->email;
    $newCompany->address = $request->address;
    $newCompany->address_number = $request->address_number;
    $newCompany->complement = $request->complement;
    $newCompany->zip = $request->zip;
    $newCompany->location_id = $request->location_id;
    $newCompany->city = $request->city;
    $newCompany->state = $request->state;

    $result = $newCompany->save();

    return view('companies.create', ["result"=>$result]);    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Company  $company
   * @return \Illuminate\Http\Response
   */
  public function show(Company $company)
  {
    return view('companies.show');
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Company  $company
   * @return \Illuminate\Http\Response
   */
  public function edit(Company $company)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Company  $company
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Company $company)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Company  $company
   * @return \Illuminate\Http\Response
   */
  public function destroy(Company $company)
  {
    //
  }
}
