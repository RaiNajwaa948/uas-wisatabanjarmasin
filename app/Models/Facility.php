<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    protected $fillable = ['name'];

    public function touristSpots()
    {
        return $this->belongsToMany(TouristSpot::class, 'tourist_spot_facilities');
    }
}