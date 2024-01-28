<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guest extends Model
{
    use HasFactory; //デフォルトの記述

    // 主キーにid以外の名前を付けているなら指定する
    protected $primaryKey = 'guest_id';

    protected $fillable = ['name', 'address', 'tel'];

    public static $rules = // バリデーション処理
    [
        'name' => 'required',
        'address' => 'required',
        'tel' =>  ['required', 'regex:/^[0-9-]+$/'],//半角英数とハイフンのみ許可
    ];

    //ソフトデリートの追加
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function reservations() {
        return $this->hasMany('App\Models\Reservation','guest_id','guest_id');
    }

    public static function booted(): void
    {
        static::deleted(function ($guest){
            $guest->reservations()->delete();
        });
    }
}
