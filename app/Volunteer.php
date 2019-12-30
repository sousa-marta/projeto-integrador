<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
  public function location()
  {
    return $this->belongsTo('App\Location');
  }

  //Comentei essa parte porque as doações vamos fazer sem ligar a empresas ou voluntários (Alex)
  // public function donations()
  // {
  //   return $this->belongsToMany('App\Donation');
  // }

  public function supports()
  {
    return $this->belongsToMany('App\Support');
  }

  protected $fillable = [
    'name', 'picture', 'birth_date', 'email', 'phone', 'address', 'address_number', 'complement', 'zip', 'location_id', 'city', 'state'
  ];
}
