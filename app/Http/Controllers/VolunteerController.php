<?php

namespace App\Http\Controllers;

use App\{Volunteer, Location};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VolunteerController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
    $volunteers = DB::table('volunteers')
    ->join('locations', 'locations.id', '=', 'volunteers.location_id')
    ->select('volunteers.*', 'locations.country as volunteer_country')
    ->orderBy('name')
    ->get();
    $message = $request->session()->get('message');
    return view('volunteers.index', compact('volunteers','message'));
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
    Volunteer::create([
      'name' => $request->volunteerName,
      $imgVolunteer = $request->file('volunteerImg'),
      $newImgName = bin2hex(random_bytes(5)).'.'.$imgVolunteer->getClientOriginalExtension(),
      $imgVolunteer->move(public_path('img/volunteers'), $newImgName),
      'picture' => $newImgName,
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
    $volunteer = Volunteer::find($id);
    $location = $volunteer->location;
    return view('volunteers.show', compact('volunteer','location'));
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
    return view('volunteers.edit', ['volunteer' => $volunteer, 'locations' => $locations]);
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
    $volunteer->name = $request->volunteerName;
    $volunteer->fill($request->except('volunteerImg'));
    if($request->hasFile('volunteerImg')) {
      $imgVolunteer = $request->file('volunteerImg');
      $name = bin2hex(random_bytes(5)).'.'.$imgVolunteer->getClientOriginalExtension();
      $volunteer->img = $name;
      $imgVolunteer->move(public_path('img/volunteers'), $name);
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
  public function destroy(Request $request, Volunteer $volunteer)
  {
    $volunteer->delete();
    $request->session()->flash('message', 'Voluntária(o) deletada(o)!');
    return redirect('volunteers');
  }
}
