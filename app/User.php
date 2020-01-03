<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{

  // Relationships
  public function courses()
  {
    return $this->belongsToMany('App\Course');
  }

  public function vacancies()
  {
    return $this->belongsToMany('App\Vacancy');
  }

  public function location()
  {
    return $this->belongsTo('App\Location');
  }

  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name', 'img', 'birth_date', 'email', 'phone', 'address', 'complement', 'zip', 'password', 'location_id',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password', 'remember_token',
  ];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
  ];

  public function roles() 
  {
    return $this->belongsToMany('App\Role');
  }

  public function hasAnyRoles($roles)
  {
    return null !== $this->roles()->whereIn('name',$roles)->first();
  }

  public function hasAnyRole($role)
  {
    return null !== $this->roles()->where('name',$role)->first();
  }
}
