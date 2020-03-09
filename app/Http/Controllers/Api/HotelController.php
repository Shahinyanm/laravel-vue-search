<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Hotel\Hotels;
use App\Models\Hotel;

class HotelController extends Controller
{
    public function index(): Hotels
    {
        return new Hotels(Hotel::all());
    }
    
    public function search(Request $request)
    {
        $term = trim($request->query);
        if (empty($term)) {
            return response()->json([]);
        }
        $hotels = Hotel::query();
        
        if (!$request->query) {
            return response(['status' => 'failed'], 403);
        }
        
        if ($request->has('name')) {
            $query = trim($request->name);
            $hotels = $hotels->where('name', 'LIKE', '%'.$query.'%');
        }
        
        if ($request->has('bedrooms')) {
            $hotels = $hotels->where('bedrooms', (int) $request->bedrooms);
        }
        
        if ($request->has('bathrooms')) {
            $hotels = $hotels->where('bathrooms', (int) $request->bathrooms);
        }
        
        if ($request->has('storeys')) {
            $hotels = $hotels->where('storeys', (int) $request->storeys);
        }
        
        if ($request->has('garages')) {
            $hotels = $hotels->where('garages', (int) $request->garages);
        }
        
        if ($request->has('start_price')) {
            $hotels = $hotels->where('price', '>=', $request->start_price);
        }
        
        if ($request->has('end_price')) {
            $hotels = $hotels->where('price', '>=', $request->end_price);
        }
                
        
        // This should do automatic and nice JSON
        return new Hotels($hotels->get());
    }
}
