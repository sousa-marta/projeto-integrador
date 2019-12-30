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
    return view('volunteers.create',["locations" => $locations]);
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
      'name' => $request->volunteerName, // Falta por configurar
      $imgVolunteer = $request->file('volunteerImg'),
      $newImgName = bin2hex(random_bytes(5)).'.'.$imgVolunteer->getClientOriginalExtension(),
      $imgVolunteer->move(public_path('img'), $newImgName),
      'img' => $newImgName,
      'birth_date' => $request->volunteerBirth,
      'phone' => $request->volunteerPhone,
      'email' => $request->volunteerEmail,
      'address' => $request->volunteerAddress,
      'address_number' => $request->volunteerAddressNo,
      'complement' => $request->volunteerAddressComp,
      'zip' => $request->volunteerZip,
      'location_id' => $request->volunteerCountry,
      'city' => $request->volunteerCity,
      'state' => $request->volunteerState
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
    $volunteer->name = $request->volunteerName; // Falta configurar para volunteers
    $volunteer->fill($request->except('volunteerImg'));
    if($request->hasFile('volunteerImg')) {
      $imgVolunteer = $request->file('volunteerImg');
      $name = bin2hex(random_bytes(5)).'.'.$imgVolunteer->getClientOriginalExtension();
      $volunteer->img = $name;
      $imgVolunteer->move(public_path('img'), $name);
    }
    $volunteer->birth_date = $request->volunteerBirth;
    $volunteer->phone = $request->volunteerPhone;
    $volunteer->email = $request->volunteerEmail;
    $volunteer->address = $request->volunteerAddress;
    $volunteer->address_number = $request->volunteerAddressNo;
    $volunteer->complement = $request->volunteerAddressComp;
    $volunteer->zip = $request->volunteerZip;
    $volunteer->location_id = $request->volunteerCountry;
    $volunteer->city = $request->volunteerCity;
    $volunteer->state = $request->volunteerState;

    $volunteer->save();
    
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
