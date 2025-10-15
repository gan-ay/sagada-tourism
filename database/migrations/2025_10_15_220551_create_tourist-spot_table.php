<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTouristSpotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tourist_spots', function (Blueprint $table) {
            $table->id('spot_id'); // Primary key
            $table->string('spot_name');
            $table->string('location');
            $table->text('description')->nullable();
            $table->string('opening_hours')->nullable();
            $table->string('contact_info')->nullable();
            $table->timestamps(); // Adds created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
