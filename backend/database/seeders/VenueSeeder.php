<?php

namespace Database\Seeders;

use App\Models\Venue;
use Illuminate\Database\Seeder;

class VenueSeeder extends Seeder
{
    public function run()
    {
        Venue::create([ 
            'name' => 'İstanbul',
            'address' => 'Harbiye, Taşkışla Cd. No:8, 34367 HARBİYE/İstanbul',
        ]);

        Venue::create([ 
            'name' => 'Antalya',
            'address' => 'Konyaaltı Sahil Şeridi Sahil Antalya Yaşam Parkı MURATPAŞA/Antalya',
        ]);

        Venue::create([ 
            'name' => 'İzmir',
            'address' => 'İzmir Kültürpark Açıkhava Tiyatrosu',
        ]);
    }
}