<?php

namespace App\Http\Controllers;


use App\Models\Room;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function landpage()
    {
        $rooms = Room::withOffers()->get();
        return view('landpage', compact('rooms'));
    }
}
