<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_profiles')->insert([
			[
                'user_id' => 1,
                'first_name' => 'System',
                'last_name' => 'Admin',
				'created_by' => 1,
				'created_at' => now()
			],
			[
                'user_id' => 2,
                'first_name' => 'Spinner',
                'last_name' => 'Guy',
				'created_by' => 1,
				'created_at' => now()
			],
		]);
    }
}
