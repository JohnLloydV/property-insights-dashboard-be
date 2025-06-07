<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'address',
        'state',
        'price',
        'rent_per_week',
        'house_area',
        'land_area',
        'total_area',
        'bedrooms',
        'bathrooms',
        'garage',
        'image_url',
    ];
}
