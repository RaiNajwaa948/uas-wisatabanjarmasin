<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['tourist_spot_id', 'user_name', 'rating', 'comment'];

    public function touristSpot()
    {
        return $this->belongsTo(TouristSpot::class);
    }
}
