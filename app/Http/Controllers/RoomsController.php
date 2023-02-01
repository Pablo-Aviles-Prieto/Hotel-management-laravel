<?php

namespace App\Http\Controllers;

use App\Models\Room;

class RoomsController extends Controller
{
    public function landpage()
    {
        $rooms = Room::withOffers()->get();
        return view('landpage', compact('rooms'));
    }
}
