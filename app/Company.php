<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
  public function vacancies()
  {
    return $this->hasMany('App\Vacancy');
  }

  public function courses()
  {
    return $this->hasMany('App\Course');
  }

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
    'name', 'logo', 'POC', 'phone', 'email', 'address', 'address_number', 'complement', 'zip', 'location_id', 'city', 'state'
  ];
}
