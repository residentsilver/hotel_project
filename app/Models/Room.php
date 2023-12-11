<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Room extends Model
{
    use HasFactory;
    protected $primaryKey = 'room_id';
    
    public function masters(){
        return $this->belongsTo('App\Models\Master','master_id','master_id');
    }

    public function reservation()
    {
        return $this->belongsToMany(Reservation::class,'reservationroom','room_id','reservation_id')->withPivot('day','price');
    }


    public function scopeMatchCategory($query, $n)
    {
        return $query->where('master_id', '=', $n);
    }

    public function  scopeAvailableDate($query, $n1, $n2){

        $checkIn = new Carbon($n1);
        $checkOut = new Carbon($n2);

        return $query->whereDoesntHave('reservation', function ($query) use ($checkIn, $checkOut) {
            $query->where(function ($query) use ($checkIn, $checkOut) {
                $query->join('reservationroom', 'rooms.room_id', '=', 'reservationroom.room_id')->join('reservations', 'reservationroom.reservation_id', '=', 'reservations.reservation_id')->whereDate('reservations.checkin', '<', $checkOut)
                    ->whereDate('reservations.checkout', '>', $checkIn);
            });
        });
    }

}
