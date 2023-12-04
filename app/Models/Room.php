<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $primaryKey = 'room_id';
    
    public function masters(){
        return $this->belongsTo('App\Models\Master','master_id','master_id');
    }
}
