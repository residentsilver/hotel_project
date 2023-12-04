<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function rooms_index(Request $request)
    {
        $items = Room::all(); 
        return view('hotel.rooms',['items' => $items]);//indexファイルへitems変数を送る。
    }

}
