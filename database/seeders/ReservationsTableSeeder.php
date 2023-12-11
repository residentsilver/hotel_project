<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'guest_id' => 1,
            'people' => '3',
            'checkin' => '2023-11-10',
            'checkout' => '2023-11-11',
        ];
        DB::table('reservations')->insert($param);

        $param = [
            'guest_id' => 2,
            'people' => '5',
            'checkin' => '2023-11-16',
            'checkout' => '2023-11-17',
        ];
        DB::table('reservations')->insert($param);

        $param = [
            'guest_id' => 1,
            'people' => '4',
            'checkin' => '2023-11-15',
            'checkout' => '2023-11-16',
        ];
        DB::table('reservations')->insert($param);

        $param = [
            'guest_id' => 2,
            'people' => '2',
            'checkin' => '2023-11-20',
            'checkout' => '2023-11-21',
        ];
        DB::table('reservations')->insert($param);
    }
}
