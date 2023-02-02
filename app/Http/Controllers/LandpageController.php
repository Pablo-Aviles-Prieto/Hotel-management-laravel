<?php

namespace App\Http\Controllers;

use App\Models\Room;

class LandpageController extends Controller
{
    public function renderView()
    {
        $rooms = Room::all();
        return view('landpage', compact('rooms'));
    }
}
