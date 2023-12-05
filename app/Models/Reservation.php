<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'guest_id' => 'required',
        'people' => 'required',
        'checkin' => 'required',
        'checkout' => 'required'
    );

    public function guest()
    {
        return $this->belongsTo(Guest::class,'guest_id','guest_id');
    }

    public function room()
    {
        return $this->belongsToMany('App\Room', 'reservation_room', 'reservation_id', 'room_id')->withPivot('day', 'price');
    }

    //public static function getRoomPrice($n)
    //{
        //$data = Reservation::with('room')->find($n);
       // return $data->room->pluck('price')->first();
    //}
}

