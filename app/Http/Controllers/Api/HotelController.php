<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Hotel\Hotels;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index(){
        return new Hotels(Hotel::all());
    }
}
