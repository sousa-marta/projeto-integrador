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
    //Não implementado, pois utiliaremos a página admin (Alex)
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //Não implementado, pois utiliaremos um modal na página admin (Alex)
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
    return redirect('/admin');
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
    //
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
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Donation  $donation
   * @return \Illuminate\Http\Response
   */
  public function destroy(Donation $donation)
  {
    //
  }
}
