<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) 
        {
            $table->bigIncrements('id');
			$table->bigInteger('event_id')->unsigned();
            $table->foreign('event_id')->references('id')->on('events');
			$table->string('full_name', 255);
			$table->string('email', 255)->nullable();
			$table->string('company', 255)->nullable();
            $table->tinyInteger('is_selected')->default(0);
            $table->dateTime('date_selected')->nullable();
			
            // Default fields
			$table->dateTime('created_at');
			$table->bigInteger('created_by');
			$table->dateTime('updated_at')->nullable();
			$table->bigInteger('updated_by')->nullable();
			$table->dateTime('deleted_at')->nullable();
			$table->bigInteger('deleted_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
