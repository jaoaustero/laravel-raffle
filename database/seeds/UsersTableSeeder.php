<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
			[
				'username' => 'system.admin@gigamare.com',
				'password' => bcrypt('secret'),
				'is_enabled' => 1,
				'created_by' => 1,
				'created_at' => now()
			],
			[
				'username' => 'spinner@gigamare.com',
				'password' => bcrypt('secret'),
				'is_enabled' => 1,
				'created_by' => 1,
				'created_at' => now()
			],
		]);
    }
}
