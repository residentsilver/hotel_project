<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Master;

class MasterController extends Controller
{
    public function masters_index(Request $request)
    {
        //$user =Auth::user();
        //$sort =$request->sort;
        //$items = User::all();
        //$param =['items' =>$items,'sort'=>$sort,'user' =>$user];
        $items = master::all(); 
        return view('hotel.masters',['items' => $items]);//indexファイルへitems変数を送る。
        //return view('hotel.index_room_masters',['items' => $items],$param);ログイン機能を搭載するならこっちを使う。
    }
}
