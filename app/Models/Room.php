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
}
