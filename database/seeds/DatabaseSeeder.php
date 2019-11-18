<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Seeding default data of Users' . PHP_EOL);
        $this->call(UsersTableSeeder::class);
        
        $this->command->info('Seeding default data of User Profiles' . PHP_EOL);
        $this->call(UserProfilesTableSeeder::class);
        
        // $this->command->info('Seeding default data of Events' . PHP_EOL);
        // $this->call(EventsTableSeeder::class);
        
        // $this->command->info('Seeding default data of Players' . PHP_EOL);
		// $this->call(PlayersTableSeeder::class);
    }
}
