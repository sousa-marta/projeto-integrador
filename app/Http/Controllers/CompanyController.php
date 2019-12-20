<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

use App\Location;

class CompanyController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
    $companies = Company::all();
    return view('companies.index', ["companies" => $companies]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create(Request $request)
  {
    $locations = Location::all(); //busca todos os países na base de dados locations
    return view('companies.create',["locations" => $locations]);
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    Company::create([
      'name' => $request->companyName,
      'logo' => $request->companyLogo,
      'POC' => $request->companyPOC,
      'phone' => $request->companyPhone,
      'email' => $request->companyEmail,
      'address' => $request->companyAddress,
      'address_number' => $request->companyAddressNo,
      'complement' => $request->companyAddressComp,
      'zip' => $request->companyZip,
      'location_id' => $request->companyCountry,
      'city' => $request->companyCity,
      'state' => $request->companyState
    ]);
    
    return redirect('/companies');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Company  $company
   * @return \Illuminate\Http\Response
   */
  public function show(Company $company)
  {
    return view('companies.show', ['company'=>$company]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Company  $company
   * @return \Illuminate\Http\Response
   */
  public function edit(Company $company)
  {
    $locations = Location::all();
    return view('companies.edit', ['company' => $company, 'locations' => $locations]);
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
    $company->name = $request->companyName;
    $company->logo = $request->companyLogo;
    $company->POC = $request->companyPOC;
    $company->phone = $request->companyPhone;
    $company->email = $request->companyEmail;
    $company->address = $request->companyAddress;
    $company->address_number = $request->companyAddressNo;
    $company->complement = $request->companyAddressComp;
    $company->zip = $request->companyZip;
    $company->location_id = $request->companyCountry;
    $company->city = $request->companyCity;
    $company->state = $request->companyState;

    $company->save();
    
    return redirect('companies');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Company  $company
   * @return \Illuminate\Http\Response
   */
  public function destroy(Company $company)
  {
    $company->delete();
    return redirect('companies');
  }
}
