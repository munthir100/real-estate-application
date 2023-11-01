<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturedAdsTable extends Migration
{
    public function up()
    {
        Schema::create('featured_ads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_advertisement_id');
            $table->timestamps();

            $table->foreign('property_advertisement_id')->references('id')->on('property_advertisements');
        });
    }

    public function down()
    {
        Schema::dropIfExists('featured_ads');
    }
}
