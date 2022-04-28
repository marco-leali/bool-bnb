<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IpAddress extends Model
{

    protected $fillable = [
        'apartment_id', 'ip'
    ];

    public function apartment()
    {
        return $this->belongsTo('App\Models\Apartment');
    }
}
