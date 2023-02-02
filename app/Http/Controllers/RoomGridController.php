<?php

namespace App\Http\Controllers;

use App\Models\Room;

class RoomGridController extends Controller
{
    public function renderRoomGrid()
    {
        $rooms_length = Room::count();
        $rooms = Room::all();
        return view('rooms-grid', compact('rooms', 'rooms_length'));
    }
}
