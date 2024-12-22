<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TouristSpot extends Model
{
    protected $table = 'tourist_spots';
    protected $guarded = ['id'];

    public function reviews() {
        return $this->belongsTo(Reviews::class);
    }
}
