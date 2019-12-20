<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
  protected $fillable = ['name','phone','email','city','description','wage','status','category_id','company_id'];

  public function category()
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
}
