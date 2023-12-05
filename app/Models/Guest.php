<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory; //デフォルトの記述

    // 主キーにid以外の名前を付けているなら指定する
    protected $primaryKey = 'guest_id';

    protected $fillable = ['name', 'address', 'tel'];
    
}
