<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    public function location()
    {
        return $this->belongsTo('App\Location');
    }

    public function donations()
    {
        return $this->belongsToMany('App\Donation');
    }

    public function supports()
    {
        return $this->belongsToMany('App\Support');
    }
}
