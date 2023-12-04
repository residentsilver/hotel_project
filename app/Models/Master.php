<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    use HasFactory;
    protected $guarded = array('master_id');

    public function rooms()
    {
        return $this->hasMany('App\room','master_id','master_id');
    }

}
