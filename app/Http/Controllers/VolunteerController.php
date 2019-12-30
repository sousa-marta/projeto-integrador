<?php

namespace App\Http\Controllers;

use App\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
    $volunteers = Volunteer::all();
    return view('volunteers.index', ["volunteers" => $volunteers]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create(Request $request)
  {
    $locations = Location::all();
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
      'name' => $request->companyName, // Falta por configurar
      $imgVolunteer = $request->file('companyLogo'),
      $newImgName = bin2hex(random_bytes(5)).'.'.$imgLogo->getClientOriginalExtension(),
      $imgLogo->move(public_path('img'), $newImgName),
      'logo' => $newImgName,
      'description' => $request->companyDescription,
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
    
    return redirect('/volunteers');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Volunteer  $volunteer
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $company = Company::find($id);
    return view('volunteers.show', compact('volunteer'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Volunteer  $volunteer
   * @return \Illuminate\Http\Response
   */
  public function edit(Volunteer $volunteer)
  {
    $locations = Location::all();
    return view('volunteers.edit', ['volunteer' => $volunteer, 'volunteers' => $volunteer]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Volunteer  $volunteer
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Volunteer $volunteer)
  {
    $company->name = $request->companyName; // Falta configurar para volunteers
    $company->fill($request->except('companyLogo'));
    if($request->hasFile('companyLogo')) {
      $imgLogo = $request->file('companyLogo');
      $name = bin2hex(random_bytes(5)).'.'.$imgLogo->getClientOriginalExtension();
      $company->logo = $name;
      $imgLogo->move(public_path('img'), $name);
    }
    $company->description = $request->companyDescription;
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
    
    return redirect('volunteers');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Volunteer  $volunteer
   * @return \Illuminate\Http\Response
   */
  public function destroy(Volunteer $volunteer)
  {
    $volunteer->delete();
    return redirect('volunteers');
  }
}
