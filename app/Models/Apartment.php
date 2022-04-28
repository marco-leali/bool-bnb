<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function position()
    {
        return $this->hasOne('App\Models\Position');
    }

    public function messages()
    {
        return $this->hasMany('App\Models\Messages');
    }

    public function ipAddresses()
    {
        return $this->hasMany('App\Models\IpAddress');
    }

    public function services()
    {
        return $this->belongsToMany('App\Models\Service');
    }

    public function packs()
    {
        return $this->belongsToMany('App\Models\Pack');
    }
}
