<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    public function run()
    {
        Event::create([ 
            'title' => 'Fikret Ertan - Karanlık Sularda Son Bir Dans - Albüm Lansman Konseri',
            'description' => 'Fikret Ertan - Karanlık Sularda Son Bir Dans - Albüm Lansman Konseri, 31 Temmuz akşamı The Wall Saloon Performance sahnesinde sizlerle..',
            'image_url' => 'https://event.kodlooper.com/images/fikretertan.jpg',
            'event_date' => '2025-01-01 19:00:00',
            'venue_id' => 1,
            'amount' => 100,
        ]);

        Event::create([ 
            'title' => 'Tarihi Havagazı Fabrikası Etkinlikleri',
            'description' => 'Tarihi Havagazı Fabrikası Etkinlikleri, 31 Temmuz akşamı The Wall Saloon Performance sahnesinde sizlerle..',
            'image_url' => 'https://event.kodlooper.com/images/tarihihavagazigenel.jpg',
            'event_date' => '2025-01-02 19:00:00',
            'venue_id' => 3,
            'amount' => 150,
        ]);

        Event::create([ 
            'title' => 'Antalya Açıkhava Etkinlikleri',
            'description' => 'Antalya Açıkhava Etkinlikleri, 31 Temmuz akşamı The Wall Saloon Performance sahnesinde sizlerle..',
            'image_url' => 'https://event.kodlooper.com/images/antalya.png',
            'event_date' => '2025-01-03 19:00:00',
            'venue_id' => 2,
            'amount' => 200,
        ]);

        Event::create([ 
            'title' => 'Harbiye Cemil Topuzlu Açıkhava 2025 Etkinlikleri',
            'description' => 'Harbiye Cemil Topuzlu Açıkhava 2025 Etkinlikleri, 31 Temmuz akşamı The Wall Saloon Performance sahnesinde sizlerle..',
            'image_url' => 'https://event.kodlooper.com/images/cemiltopuzlu.jpg',
            'event_date' => '2025-01-04 19:00:00',
            'venue_id' => 1,
            'amount' => 250,
        ]);

        Event::create([ 
            'title' => 'Can Gox',
            'description' => 'Can Gox, 31 Temmuz akşamı The Wall Saloon Performance sahnesinde sizlerle..',
            'image_url' => 'https://event.kodlooper.com/images/4HKB7-cangox.jpg',
            'event_date' => '2025-01-05 19:00:00',
            'venue_id' => 1,
            'amount' => 300,
        ]);
    }
}