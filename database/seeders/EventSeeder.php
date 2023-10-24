<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert

        ([
            'event_name' => 'Laravel Meetup',
            'event_date' => '2021-10-23 18:00:00',
            'event_max_capacity' => 100,
            'event_speaker_name' => 'John Doe',
            'event_location_name' => 'Laravel HQ',
            'event_meetup_url' => 'https://meetup.com/laravel',
            'event_is_virtual' => false,
            'event_price' => 0.00,
            'created_at' => now(),
            'updated_at' => now()

        ]);
        
        DB::table('events')->insert

        ([
            'event_name' => 'Laravel1 Meetup',
            'event_date' => '2021-10-23 18:00:00',
            'event_max_capacity' => 100,
            'event_speaker_name' => ' Edwin Diaz',
            'event_location_name' => 'Laravel HQ',
            'event_meetup_url' => 'https://meetup.com/laravel',
            'event_is_virtual' => false,
            'event_price' => 0.00,
            'created_at' => now(),
            'updated_at' => now()

        ]);
    
    }
}

