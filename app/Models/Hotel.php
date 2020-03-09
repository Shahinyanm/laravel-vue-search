<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = ['name', 'price', 'bedrooms', 'bathrooms', 'storeys', 'garages'];
    
    protected $casts = [
        'name' => 'string',
        'price' => 'float',
        'bedrooms' => 'integer',
        'bathrooms' => 'integer',
        'storeys' => 'integer',
        'garages' => 'integer',
    ];
}
