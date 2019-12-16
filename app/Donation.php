<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
  
  protected $fillable = ['name','phone','amount','status'];

  //Comentei essa parte porque as doações vamos fazer sem ligar a empresas ou voluntários (Alex)
  // public function companies()
  // {
  //   return $this->belongsToMany('App\Company');
  // }

  // public function volunteers()
  // {
  //   return $this->belongsToMany('App\Volunteer');
  // }
}
