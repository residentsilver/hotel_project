<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param =[
            'room_id' =>1,
            'master_id' =>1,
            'room_num' =>'101',
            'room_price' =>5000,
        ];
        DB::table('rooms')->insert($param);

        $param =[
            'room_id' =>2,
            'master_id' =>1,
            'room_num' =>'102',
            'room_price' =>6000,
        ];
        DB::table('rooms')->insert($param);

        $param =[
            'room_id' =>3,
            'master_id' =>1,
            'room_num' =>'103',
            'room_price' =>7000,
        ];
        DB::table('rooms')->insert($param);

        $param =[
            'room_id' =>4,
            'master_id' =>2,
            'room_num' =>'あの間',
            'room_price' =>8000,
        ];
        DB::table('rooms')->insert($param);

        $param =[
            'room_id' =>5,
            'master_id' =>2,
            'room_num' =>'いの間',
            'room_price' =>9000,
        ];
        DB::table('rooms')->insert($param);

        $param =[
            'room_id' =>6,
            'master_id' =>2,
            'room_num' =>'うの間',
            'room_price' =>12000,
        ];
        DB::table('rooms')->insert($param);

        $param =[
            'room_id' =>7,
            'master_id' =>3,
            'room_num' =>'スイート',
            'room_price' =>18000,
        ];
        DB::table('rooms')->insert($param);

        $param =[
            'room_id' =>8,
            'master_id' =>3,
            'room_num' =>'カカオ',
            'room_price' =>20000,
        ];
        DB::table('rooms')->insert($param);

        $param =[
            'room_id' =>9,
            'master_id' =>3,
            'room_num' =>'みかん',
            'room_price' =>25000,
        ];
        DB::table('rooms')->insert($param);
    }
}
