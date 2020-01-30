<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Donation;
use App\Http\Requests\ValidatingDonationForms;
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
  public function create(Request $request)
  {
    $donations = Donation::all();
    $message = $request->session()->get('message');
    return view('admin.donations.create', [
      "donations" => $donations,
      "message" => $message
    ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(ValidatingDonationForms $request)
  {
    $donation = Donation::create([
      'name' => $request->donationName,
      'phone' => $request->donationPhone,
      'amount' => $request->donationValue,
      'status' => $request->donationStatus
    ]);
    $request->session()->flash('message', "A doação foi salva com sucesso");
    return redirect('/admin/donations/create');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Donation  $donation
   * @return \Illuminate\Http\Response
   */
  public function show(Donation $donation)
  {
    return view('admin.donations.show', ['donation' => $donation]);
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
  public function update(ValidatingDonationForms $request, Donation $donation)
  {
    $donation->name = $request->donationName;
    $donation->phone = $request->donationPhone;
    $donation->amount = $request->donationValue;
    $donation->status = $request->donationStatus;
    $donation->save();
    $request->session()->flash('message', 'Doação atualizada!');
    return redirect()->route('admin.donations.show', [$donation]);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Donation  $donation
   * @return \Illuminate\Http\Response
   */
  public function destroy(Request $request, Donation $donation)
  {
    $donation->delete();
    $request->session()->flash('message', 'Doação deletada!');
    return redirect('/admin/donations/create');
  }
}
