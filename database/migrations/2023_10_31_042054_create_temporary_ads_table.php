<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemporaryAdsTable extends Migration
{
    public function up()
    {
        Schema::create('temporary_ads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_advertisement_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();

            $table->foreign('property_advertisement_id')->references('id')->on('property_advertisements');
        });
    }

    public function down()
    {
        Schema::dropIfExists('temporary_ads');
    }
}
