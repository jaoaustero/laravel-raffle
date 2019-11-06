<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SetupInstall extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'setup:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Setting up your database with default data';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info(PHP_EOL . 'Generating app key.....' . PHP_EOL);
		$this->call('key:generate');

		$this->info(PHP_EOL . 'Dropping tables in database.....' . PHP_EOL);
		$this->call('drop:tables');

		$this->info(PHP_EOL . 'Migrating database.....' . PHP_EOL);
		$this->call('migrate');

		$this->info(PHP_EOL . 'Seeding default data in database.....' . PHP_EOL);
		$this->call('db:seed');

        $this->info(PHP_EOL . 'Tapos na ang proseso! Mabuhay!' . PHP_EOL);
    }
}
