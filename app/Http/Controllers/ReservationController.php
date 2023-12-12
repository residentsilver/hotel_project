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
        $checkin = session('checkin');
        $checkout = session('checkout');
        return view('reservation.add',['items' => $items,'msg'=>$msg,'checkin'=>$checkin,'checkout'=>$checkout,]);
    }

    public function create(Request $request){
        $this->validate($request,Reservation::$rules);

        
        //$day = $request->day;
        
        $reservation = new Reservation;
        $form = $request->all();
        unset($form['_token']);
        $reservation->fill($form)->save();

        $room_id = $request->room_id;
        $checkIN = $request->checkin;
        $checkOut = $request->checkout;
        $day= Reservation::getUseDays($checkIN,$checkOut);
        $people= $request->people;
        $room_price= Reservation::getRoomPrice($room_id);
        $total_price = $people * $day * $room_price;
        $reservation->room()->attach($room_id,['day' => $day, 'price'=> $total_price]);
        return view('reservation.add',['msg'=>'予約が完了しました']);

    }
}
