<?php

namespace Database\Seeders;

use App\Models\TicketCategory;
use Illuminate\Database\Seeder;

class TicketCategorySeeder extends Seeder
{
    public function run()
    {
        TicketCategory::create([ 
            'name' => 'Genel Giriş',
        ]);
        TicketCategory::create([ 
            'name' => 'Protokol',
        ]);
        
    }
}