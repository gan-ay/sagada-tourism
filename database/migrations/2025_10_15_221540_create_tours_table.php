<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id('tour_id'); // Primary key
            $table->string('tour_name');
            $table->string('description')->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->string('duration')->nullable();
            $table->unsignedBigInteger('spot_id'); // Foreign key
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('spot_id')
                  ->references('spot_id')
                  ->on('tourist_spots')
                  ->onDelete('cascade'); // Deletes tours if the tourist spot is deleted
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours');
    }
}
