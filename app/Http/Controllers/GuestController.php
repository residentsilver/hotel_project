<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;//Laravel10から階層変わってる

class GuestController extends Controller
{
    public function index()
    {
        $items = Guest::all();//guestsテーブル(複数形)に登録されているデータ項目を、モデルGuest.php(単数形)を通じて、全て取得。

        return view('guest',['guests' => $items]);//①guest.blade.phpを呼び出す、⓶変数guestsに変数items(Guest::all();)を渡す
    }
}