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
    public function show(TouristSpot $touristspot)
    {
        return view('tourist_spot_branch.show', compact('touristspot'));
    }

    public function create()
    {
        return view('tourist_spot_branch.create');
    }

    public function store(Request $request)
    {
        $touristSpot = new TouristSpot;
        $touristSpot->spot_name = $request->spot_name;
        $touristSpot->location = $request->location;
        $touristSpot->description = $request->description;
        $touristSpot->opening_hours = $request->opening_hours;
        $touristSpot->contact_info = $request->contact_info;
        $touristSpot->image_url = $request->image_url;
        $touristSpot->save();

        return redirect('/touristspot');
    }
    public function edit(TouristSpot $touristspot)
    {
        return view('tourist_spot_branch.edit', compact('touristspot'));
    }

    public function update(Request $request, TouristSpot $touristspot)
    {
        $touristspot->update($request->all());

        return redirect('/touristspot');
    }

    public function destroy(TouristSpot $touristspot)
    {
        $touristspot->delete();

        return redirect('/touristspot');
    }

}