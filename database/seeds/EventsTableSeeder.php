<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
			[
                'slug' => slugifyEvent('Crew Connect Day 1 Event Raffle'),
                'name' => 'Crew Connect Day 1 Event Raffle',
                'prize' => 'Powerbank 5000amp',
                'location' => 'Subic Bay Yacht Club',
                'event_date' => '2019-12-31',
                'path' => 'events/sample-qr-code.png',
                'is_active' => 1,
				'created_by' => 1,
				'created_at' => now()
			],
			[
                'slug' => slugifyEvent('Crew Connect Day 2 Event Raffle'),
                'name' => 'Crew Connect Day 2 Event Raffle',
                'prize' => 'Wireless Headphones',
                'location' => 'Subic Bay Yacht Club',
                'event_date' => '2019-12-31',
                'path' => 'events/sample-qr-code.png',
                'is_active' => 1,
				'created_by' => 1,
				'created_at' => now()
			],
		]);
    }
}
