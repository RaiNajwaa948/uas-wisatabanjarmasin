<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    protected $table = 'reviews';
    protected $guarded = ['id'];

    public function touristSpot() {
        return $this->hasMany(TouristSpot::class);
    }
}
