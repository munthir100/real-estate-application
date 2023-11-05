<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // Add any other columns you need for your City model here
            
            $table->timestamps();

            $table->foreignId('town_id')->references('id')->on('towns');
        });
    }

    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
