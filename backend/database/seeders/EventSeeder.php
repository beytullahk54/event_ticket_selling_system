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
            'image_url' => 'https://www.biletix.com/static/images/live/event/eventimages/fikretertan-2025su.jpg',
            'event_date' => '2025-01-01',
            'venue_id' => 1,
        ]);

        Event::create([ 
            'title' => 'Tarihi Havagazı Fabrikası Etkinlikleri',
            'description' => 'Tarihi Havagazı Fabrikası Etkinlikleri, 31 Temmuz akşamı The Wall Saloon Performance sahnesinde sizlerle..',
            'image_url' => 'https://www.biletix.com/static/images/live/event/groupimages/tarihihavagazigenel.jpg',
            'event_date' => '2025-01-02',
            'venue_id' => 3,
        ]);

        Event::create([ 
            'title' => 'Antalya Açıkhava Etkinlikleri',
            'description' => 'Antalya Açıkhava Etkinlikleri, 31 Temmuz akşamı The Wall Saloon Performance sahnesinde sizlerle..',
            'image_url' => 'https://www.biletix.com/static/images/live/event/groupimages/antalyaaa366845358-3.png',
            'event_date' => '2025-01-03',
            'venue_id' => 2,
        ]);

        Event::create([ 
            'title' => 'Harbiye Cemil Topuzlu Açıkhava 2025 Etkinlikleri',
            'description' => 'Harbiye Cemil Topuzlu Açıkhava 2025 Etkinlikleri, 31 Temmuz akşamı The Wall Saloon Performance sahnesinde sizlerle..',
            'image_url' => 'https://www.biletix.com/static/images/live/event/groupimages/cemiltopuzlu_2025su.jpg',
            'event_date' => '2025-01-04',
            'venue_id' => 1,
        ]);

        Event::create([ 
            'title' => 'Can Gox',
            'description' => 'Can Gox, 31 Temmuz akşamı The Wall Saloon Performance sahnesinde sizlerle..',
            'image_url' => 'https://www.biletix.com/static/images/live/event/eventimages/4HKB7-cangox.jpg',
            'event_date' => '2025-01-05',
            'venue_id' => 1,
        ]);
    }
}