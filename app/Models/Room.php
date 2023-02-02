<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
  protected $table = 'rooms';

  public function scopeWithOffers($query)
  {
    return $query->whereNotNull('offerPrice');
  }

  public function bookings()
  {
    return $this->hasMany(Booking::class, 'roomId');
  }

  public function getBookedRooms($checkin, $checkout)
  {
    return Room::select('rooms.id')
      ->distinct()
      ->join('bookings', 'rooms.id', '=', 'bookings.roomId')
      ->where(function ($query) use ($checkin, $checkout) {
        $query->whereBetween('bookings.checkIn', [$checkin, $checkout])
          ->orWhereBetween('bookings.checkOut', [$checkin, $checkout]);
      })
      ->get();
  }

  public function getAvailableRooms($checkin = null, $checkout = null)
  {
    if ($checkin && $checkout) {
      $bookedRooms = $this->getBookedRooms($checkin, $checkout)->pluck('id');
      return Room::whereNotIn('id', $bookedRooms)->get();
    }

    return Room::all();
  }
}
