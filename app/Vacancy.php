<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
  public function categories()
  {
    return $this->belongsTo('App\Category');
  }

  public function users()
  {
    return $this->belongsToMany('App\User');
  }

  public function company()
  {
    return $this->belongsTo('App\Company');
  }

  public function location()
  {
    return $this->belongsTo('App\Location');
  }
}
