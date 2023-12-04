<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(ReservationsTableSeeder::class);
        $this->call(MastersTableSeeder::class);
        $this->call(GuestsTableSeeder::class);
        $this->call(RoomsTableSeeder::class);

    }
}
