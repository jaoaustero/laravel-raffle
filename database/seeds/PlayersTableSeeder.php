<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
			[
                'event_id' => 1,
                'full_name' => 'Player One',
                'email' => 'player.one@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
			],
			[
                'event_id' => 1,
                'full_name' => 'Player Two',
                'email' => 'player.two@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
            ],
            [
                'event_id' => 1,
                'full_name' => 'Player Three',
                'email' => 'player.three@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
            ],
            [
                'event_id' => 1,
                'full_name' => 'Player Four',
                'email' => 'player.four@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
            ],
            [
                'event_id' => 1,
                'full_name' => 'Player Five',
                'email' => 'player.five@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
            ],
            [
                'event_id' => 1,
                'full_name' => 'Player Six',
                'email' => 'player.six@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
            ],
            [
                'event_id' => 1,
                'full_name' => 'Player Seven',
                'email' => 'player.seven@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
            ],
            
            [
                'event_id' => 1,
                'full_name' => 'Player Eight',
                'email' => 'player.eight@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
            ],
            [
                'event_id' => 1,
                'full_name' => 'Player Nine',
                'email' => 'player.nine@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
            ],
            [
                'event_id' => 1,
                'full_name' => 'Player Ten',
                'email' => 'player.ten@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
            ],
            [
                'event_id' => 1,
                'full_name' => 'Player Eleven',
                'email' => 'player.eleven@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
            ],
            [
                'event_id' => 1,
                'full_name' => 'Player Twelve',
                'email' => 'player.twelve@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
            ],
            [
                'event_id' => 1,
                'full_name' => 'Player Thirteen',
                'email' => 'player.thirteen@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
            ],
            [
                'event_id' => 1,
                'full_name' => 'Player Fourteen',
                'email' => 'player.fourteen@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
            ],
            [
                'event_id' => 1,
                'full_name' => 'Player Fifteen',
                'email' => 'player.fifteen@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
            ],
            [
                'event_id' => 1,
                'full_name' => 'Player Sixteen',
                'email' => 'player.sixteen@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
            ],
            [
                'event_id' => 1,
                'full_name' => 'Player Seventeen',
                'email' => 'player.seventeen@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
            ],
            [
                'event_id' => 1,
                'full_name' => 'Player Eighteen',
                'email' => 'player.eighteen@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
            ],
            [
                'event_id' => 1,
                'full_name' => 'Player Ninteen',
                'email' => 'player.ninteen@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
            ],
            [
                'event_id' => 1,
                'full_name' => 'Player Twenty',
                'email' => 'player.twenty@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
			],
		]);
    }
}
