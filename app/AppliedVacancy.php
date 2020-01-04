<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppliedVacancy extends Model
{
  protected $fillable = ['name', 'email', 'resume'];
}
