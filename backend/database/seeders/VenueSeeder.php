<?php

namespace Database\Seeders;

use App\Models\Venue;
use Illuminate\Database\Seeder;

class VenueSeeder extends Seeder
{
    public function run()
    {
        Venue::create([ 
            'name' => 'Venue 1',
            'address' => 'Address 1',
        ]);

        Venue::create([ 
            'name' => 'Venue 2',
            'address' => 'Address 2',
        ]);

        Venue::create([ 
            'name' => 'Venue 3',
            'address' => 'Address 3',
        ]);
    }
}