<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('price');
            $table->integer('duration');
            $table->integer('num_ads_allowed');
            $table->integer('num_temp_ads');
            $table->integer('num_distinctive_ads');
            $table->integer('priority_support');
            $table->integer('num_affiliate_users');
            $table->boolean('include_ologo');
            // Add any other columns you need for your Plan model here
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('plans');
    }
}
