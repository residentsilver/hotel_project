<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class ReservationroomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'reservation_id' => 1,
            'room_id' => 3,
            'day' => 2,
            'price' => 10000,
        ];
        DB::table('reservationroom')->insert($param);

        $param = [
            'reservation_id' => 2,
            'room_id' => 3,
            'day' => 2,
            'price' => 10000,
        ];
        DB::table('reservationroom')->insert($param);

        $param = [
            'reservation_id' => 3,
            'room_id' => 3,
            'day' => 2,
            'price' => 10000,
        ];
        DB::table('reservationroom')->insert($param);

        $param = [
            'reservation_id' => 4,
            'room_id' => 3,
            'day' => 2,
            'price' => 10000,
        ];
        DB::table('reservationroom')->insert($param);
    }
}
