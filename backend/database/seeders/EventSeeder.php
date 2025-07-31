<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    public function run()
    {
        Event::create([ 
            'title' => 'Event 1',
            'description' => 'Description 1',
            'image_url' => 'https://picsum.photos/200/300',
            'event_date' => '2025-01-01',
            'venue_id' => 1,
        ]);

        Event::create([ 
            'title' => 'Event 2',
            'description' => 'Description 2',
            'image_url' => 'https://picsum.photos/200/300',
            'event_date' => '2025-01-02',
            'venue_id' => 2,
        ]);

        Event::create([ 
            'title' => 'Event 3',
            'description' => 'Description 3',
            'image_url' => 'https://picsum.photos/200/300',
            'event_date' => '2025-01-03',
            'venue_id' => 3,
        ]);
    }
}