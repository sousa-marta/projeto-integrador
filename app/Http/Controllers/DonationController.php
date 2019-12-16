<?php

namespace App\Http\Controllers;

use App\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
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
  public function create()
  {
    $donations = Donation::all();
    return view('donations.create',["donations" => $donations]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {

    //TODO: montar validação das doações
    // $request->validate([
    //   'title' => 'required|min:3',
    //   'description' => 'required',
    // ]);
    
    $donation = Donation::create(['name' => $request->donationName,
                                  'phone' => $request->donationPhone,
                                  'amount' => $request->donationValue,
                                  'status' => $request->donationStatus]);
    return redirect('/donations/create');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Donation  $donation
   * @return \Illuminate\Http\Response
   */
  public function show(Donation $donation)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Donation  $donation
   * @return \Illuminate\Http\Response
   */
  public function edit(Donation $donation)
  {
    return view('donations.edit',['donation' => $donation]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Donation  $donation
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Donation $donation)
  {

    //TODO: montar validação das doações
    // $request->validate([
    //   'title' => 'required|min:3',
    //   'description' => 'required',
    // ]);
  
    $donation->name = $request->donationName;
    $donation->phone = $request->donationPhone;
    $donation->amount = $request->donationValue;
    $donation->status = $request->donationStatus;
    $donation->save();
    return redirect('/donations/create');

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Donation  $donation
   * @return \Illuminate\Http\Response
   */
  public function destroy(Donation $donation)
  {
    $donation->delete();
    return redirect('/donations/create');
  }
}
