<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
  public function vacancies()
  {
    return $this->hasMany('App\Vacancy');
  }

  public function companies()
  {
    return $this->hasMany('App\Company');
  }

  public function volunteers()
  {
    return $this->hasMany('App\Volunteer');
  }

  public function users()
  {
    return $this->hasMany('App\User');
  }
}
