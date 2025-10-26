<?php

namespace App\Http\Controllers;

use App\Models\TouristSpot;
use Illuminate\Http\Request;

class TouristSpotController extends Controller
{
    public function index()
    {
        // Get all data from the 'tourist_spots' table
        $spots = TouristSpot::all();

        // Send the data to your view
        return view('tourist_spot_branch.index', compact('spots'));
    }
    public function show($id)
    {
        $touristSpot = TouristSpot::findOrFail($id);
        return view('tourist_spot.show', compact('touristSpot'));
    }

    
}