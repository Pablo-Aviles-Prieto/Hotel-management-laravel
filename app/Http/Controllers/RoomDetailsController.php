<?php

namespace App\Http\Controllers;

use App\Models\Room;

class RoomDetailsController extends Controller
{
    public function renderRoomDetails($id = null)
    {
        if ($id === null) {
            return redirect('/');
        }

        $alert = null;

        if (isset($_GET['checkin']) && isset($_GET['checkout'])) {
            global $_GET;
            $checkin = $_GET['checkin'];
            $checkout = $_GET['checkout'];
            $room = Room::where('id', $id)
                ->whereHas('bookings', function ($query) use ($checkin, $checkout) {
                    $query->whereBetween('checkIn', [$checkin, $checkout])
                        ->orWhereBetween('checkOut', [$checkin, $checkout]);
                })->first();
            if ($room) {
                $alert = 'Sorry, the room is not available for the selected dates';
            } else {
                $alert = 'The room is available. Book it now!';
            }
        }

        $room = Room::find($id);
        return view('rooms-details', compact('room', 'alert'));
    }
}
