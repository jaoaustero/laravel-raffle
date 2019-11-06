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
                'first_name' => 'Player',
                'last_name' => 'One',
                'email' => 'player.one@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
			],
			[
                'event_id' => 1,
                'first_name' => 'Player',
                'last_name' => 'Two',
                'email' => 'player.two@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
            ],
            [
                'event_id' => 1,
                'first_name' => 'Player',
                'last_name' => 'Three',
                'email' => 'player.three@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
            ],
            [
                'event_id' => 1,
                'first_name' => 'Player',
                'last_name' => 'Four',
                'email' => 'player.four@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
            ],
            [
                'event_id' => 1,
                'first_name' => 'Player',
                'last_name' => 'Five',
                'email' => 'player.five@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
            ],
            [
                'event_id' => 1,
                'first_name' => 'Player',
                'last_name' => 'Six',
                'email' => 'player.six@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
            ],
            [
                'event_id' => 1,
                'first_name' => 'Player',
                'last_name' => 'Seven',
                'email' => 'player.seven@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
            ],
            
            [
                'event_id' => 1,
                'first_name' => 'Player',
                'last_name' => 'Eight',
                'email' => 'player.eight@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
            ],
            [
                'event_id' => 1,
                'first_name' => 'Player',
                'last_name' => 'Nine',
                'email' => 'player.nine@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
            ],
            [
                'event_id' => 1,
                'first_name' => 'Player',
                'last_name' => 'Ten',
                'email' => 'player.ten@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
            ],
            [
                'event_id' => 1,
                'first_name' => 'Player',
                'last_name' => 'Eleven',
                'email' => 'player.eleven@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
            ],
            [
                'event_id' => 1,
                'first_name' => 'Player',
                'last_name' => 'Twelve',
                'email' => 'player.twelve@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
            ],
            [
                'event_id' => 1,
                'first_name' => 'Player',
                'last_name' => 'Thirteen',
                'email' => 'player.thirteen@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
            ],
            [
                'event_id' => 1,
                'first_name' => 'Player',
                'last_name' => 'Fourteen',
                'email' => 'player.fourteen@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
            ],
            [
                'event_id' => 1,
                'first_name' => 'Player',
                'last_name' => 'Fifteen',
                'email' => 'player.fifteen@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
            ],
            [
                'event_id' => 1,
                'first_name' => 'Player',
                'last_name' => 'Sixteen',
                'email' => 'player.sixteen@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
            ],
            [
                'event_id' => 1,
                'first_name' => 'Player',
                'last_name' => 'Seventeen',
                'email' => 'player.seventeen@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
            ],
            [
                'event_id' => 1,
                'first_name' => 'Player',
                'last_name' => 'Eighteen',
                'email' => 'player.eighteen@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
            ],
            [
                'event_id' => 1,
                'first_name' => 'Player',
                'last_name' => 'Nineteen',
                'email' => 'player.nineteen@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
            ],
            [
                'event_id' => 1,
                'first_name' => 'Player',
                'last_name' => 'Twenty',
                'email' => 'player.twenty@gmail.com',
                'company' => 'Company 1',
				'created_by' => 1,
				'created_at' => now()
			],
		]);
    }
}
