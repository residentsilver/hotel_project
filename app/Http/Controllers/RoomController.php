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

    public function find(Request $request){
        $msg = session('msg');
        return view('room.find',['input'=>'','msg'=>$msg]);
    }

      //空室検索
      public function search(Request $request){
        $category = $request->master_id;
        $checkin = $request->checkin;
        $checkout = $request->checkout;
        $threshold = $request->number_of_room; 
        $items = Room::matchCategory($category)->availableDate($checkin,$checkout)->get();

        if($items->count()>=$threshold){
            return redirect('/reservation/add')->with('items',$items);
        }else{
            return view('room.find',['msg'=>'検索条件に該当するお部屋はございません']);
        }
        
    }

}
