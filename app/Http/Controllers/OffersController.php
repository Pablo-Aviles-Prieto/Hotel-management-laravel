<?php

namespace App\Http\Controllers;

use App\Models\Room;

class OffersController extends Controller
{
    public function renderView()
    {
        $offer_rooms = Room::withOffers()->get();
        $rooms = Room::all();
        return view('offers', compact('offer_rooms', 'rooms'));
    }
}
