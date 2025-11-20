<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tourists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('contact')->nullable(); // or contact_info if you prefer
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('tourists');
    }
};
