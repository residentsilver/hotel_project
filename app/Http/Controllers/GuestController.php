<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest; //Laravel10から階層変わってる

class GuestController extends Controller
{

    //一覧表示-----------------------------------------
    public function index()
    {
        $guests = Guest::all(); //guestsテーブル(複数形)に登録されているデータ項目を、モデルGuest.php(単数形)を通じて、全て取得。

        return view('guest', ['guests' => $guests, 'msg' => 'フォームを入力：']); //①guest.blade.phpを呼び出す、⓶bladeの変数guestsに、$guestsの中身(Guest::all();)を渡す
    }

    //バリデーション-----------------------------------------
    public function post(Request $request)
    {
        $validate_rule = [
            'name' => 'required',
            'address' => 'required',
            'tel' => ['required', 'max:255', 'regex:/^[0-9-]+$/'] //半角数字＋ハイフン
        ];

        $this->validate($request, $validate_rule);
        return view('guest', ['msg' => '正しく入力されました！']);
    }


    //追加登録-----------------------------------------
    public function add()
    {
        return view('guest.add'); //表示する
    }

    public function create(Request $request)
    {
        $guest = new guest();
        $guest->fill($request->all())->save();
        return redirect('guest'); //guestページにリダイレクトする
    }


    //更新-----------------------------------------
    public function edit(Request $request)
    {
        $guest = Guest::find($request->id); //finf()は1つしかデータ取得しない！＝変数も単数形が正しい
        // dd($guests);//変数guestの中身確認
        return view('guestedit', [
            'guest' => $guest
        ]);
    }

    public function update(Request $request)
    {
        $guest = Guest::find($request->id); //入力された(ボタンクリックされた)guest_idの値を取得して、変数$guestに代入
        // dd($guest);
        $guest->fill($request->all())->save(); //変数$guestに、フォームに入力された値を保存する
        return redirect('/guest');
    }


    //削除処理
    public function delete(Guest $guest)
    {
        $guest->delete();
        return redirect('/guest');
    }
}
