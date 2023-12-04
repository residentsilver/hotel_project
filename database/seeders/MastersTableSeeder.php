<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MastersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     public function run(): void
    {
        $param =[
            'master_id' =>1,
            'room_name' =>'洋室',
            'imitation' =>2,
            'room_image' =>'images/youshitsu.png',
        ];
        DB::table('masters')->insert($param);

        $param =[
            'master_id' =>2,
            'room_name' =>'和室',
            'imitation' =>4,
            'room_image' =>'images/wasitsu.png',
        ];
        DB::table('masters')->insert($param);

        $param =[
            'master_id' =>3,
            'room_name' =>'VIP',
            'imitation' =>8,
            'room_image' =>'images/vip.jpeg',
        ];
        DB::table('masters')->insert($param);
}

}
