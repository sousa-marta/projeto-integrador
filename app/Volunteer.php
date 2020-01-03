<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
  public function location()
  {
    return $this->belongsTo('App\Location');
  }

  public function supports()
  {
    return $this->belongsToMany('App\Support');
  }

  protected $fillable = [
    'name', 'picture', 'birth_date', 'email', 'phone', 'address', 'address_number', 'complement', 'zip', 'location_id', 'city', 'state'
  ];
}
