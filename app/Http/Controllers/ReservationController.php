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
}
