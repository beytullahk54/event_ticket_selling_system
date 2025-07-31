<?php

namespace Database\Seeders;

use App\Models\Seat;
use Illuminate\Database\Seeder;

class SeatSeeder extends Seeder
{
    public function run()
    {
        for ($i = 1; $i <= 32; $i++) {
            Seat::create([ 
                'seat_number' => $i,
                'venue_id' => 1,
            ]);
        }

        for ($i = 1; $i <= 40; $i++) {
            Seat::create([ 
                'seat_number' => $i,
                'venue_id' => 2,
            ]);
        }

        for ($i = 1; $i <= 48; $i++) {
            Seat::create([ 
                'seat_number' => $i,
                'venue_id' => 3,
            ]);
        }
    }
}