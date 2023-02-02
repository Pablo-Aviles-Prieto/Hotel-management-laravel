<?php

namespace App\Http\Controllers;

use App\Models\Room;

class RoomListController extends Controller
{
    public function renderRoomList($id = null)
    {
        if ($id === null) {
            return redirect('/');
        }

        $room = Room::find($id);
        return view('rooms-details', compact('room'));
    }
}
