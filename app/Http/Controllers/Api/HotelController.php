<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Hotel\Hotels;
use App\Models\Hotel;

class HotelController extends Controller
{
    public function index($query = null): Hotels
    {
        $hotels = new Hotel();
        if($query){
        
        }
        
        return new Hotels();
    }
}
