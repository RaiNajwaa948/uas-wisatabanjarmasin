<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TouristSpot extends Model
{
    protected $fillable = ['category_id', 'name', 'description', 'address', 'latitude', 'longitude'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function facilities()
    {
        return $this->belongsToMany(Facility::class, 'tourist_spot_facilities');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
