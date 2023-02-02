<?php

namespace App\Http\Controllers;

use App\Models\Room;

class RoomListController extends Controller
{
    public function renderRoomList()
    {
        if (isset($_GET['checkin']) && isset($_GET['checkout'])) {
            $checkin = $_GET['checkin'];
            $checkout = $_GET['checkout'];

            $room = new Room;
            $rooms = $room->getAvailableRooms($checkin, $checkout);
            $rooms_length = count($rooms);
        } else {
            $room = new Room;
            $rooms = $room->getAvailableRooms();
            $rooms_length = count($rooms);
        }

        return view('rooms-list', compact('rooms', 'rooms_length'));
    }
}
