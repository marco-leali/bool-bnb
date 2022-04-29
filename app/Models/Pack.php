<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    protected $fillable = [
        'name', 'price', 'time'
    ];

    public function apartments()
    {


        return $this->belongsToMany('App\Models\Apartment')->withTimestamps()->withPivot('expire');
    }
}
