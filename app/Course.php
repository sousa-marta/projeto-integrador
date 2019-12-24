<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
  //Utilizando fillable para poder inserir informações no db:
  protected $fillable = ['name','description','duration','start','end','status','category_id','company_id'];

  public function category()
  {
    return $this->belongsTo('App\Category');
  }

  public function company()
  {
    return $this->belongsTo('App\Company');
  }

  public function users()
  {
    return $this->belongsToMany('App\User');
  }
}
