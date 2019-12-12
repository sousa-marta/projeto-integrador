<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
  public function companies()
  {
    return $this->belongsToMany('App\Company');
  }

  public function volunteers()
  {
    return $this->belongsToMany('App\Volunteer');
  }
}
