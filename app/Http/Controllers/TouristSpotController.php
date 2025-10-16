<?php

namespace App\Http\Controllers;

use App\Models\TouristSpot;
use Illuminate\Http\Request;

class TouristSpotController extends Controller
{
    public function index()
    {
        $spots = TouristSpot::all();
        return view('tourist_spot_branch.index', compact('spots'));
    }
}
