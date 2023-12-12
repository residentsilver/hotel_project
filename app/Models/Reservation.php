<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Carbon\Carbon;

class Reservation extends Model
{
    use HasFactory;
    protected $primaryKey = 'reservation_id';
    protected $fillable = ['guest_id','people','checkin','checkout'];

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

    public function room():BelongsToMany
    {
        return $this->belongsToMany(Room::class, 'reservationroom', 'reservation_id', 'room_id')->withPivot('day', 'price');
    }

    public static function getRoomPrice($n)
    {
        $data = Room::find($n);
        return $data->room_price;
    }

    public static function getUseDays($n1, $n2){

        $checkIn = new Carbon($n1);
        $checkOut = new Carbon($n2);

        return  $checkIn->diffInDays($checkOut);
    }
}

