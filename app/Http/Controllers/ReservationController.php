<?php

namespace App\Http\Controllers;

use App\Models\Reservation;

use Illuminate\Http\Request;
use Illuminate\View\View;
class ReservationController extends Controller
{
    public function index(Request $request):View{
        $items = Reservation::all();
        return view('reservation.index',['items' => $items]);
    }

    public function add(Request $request):View{
        $items = session('items');
        $msg = session('msg');
        return view('reservation.add',['items' => $items,'msg'=>$msg]);
    }

    public function create(Request $request){
        $this->validate($request,Reservation::$rules);

        
        $checkin_date = $request->checkin;
        
        $reservation = new Reservation;
        $form = $request->all();
        unset($form['_token']);
        $reservation->fill($form)->save();

        $room_id = $request->room_id;
        $price= $request->price;
        //$total_price = $people * $room_price;
        $reservation->room()->attach($room_id,['checkin_date' => $checkin_date, 'price'=> $price]);
        return view('reservation.add',['msg'=>'予約が完了しました']);

    }
}
