<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $fillable = [
        'apartment_id', 'postal_code','province', 'latitude', 'longitude', 'street', 'city'
    ];

    public function apartment()
    {
        return $this->belongsTo('App\Models\Apartment');
    }
}
