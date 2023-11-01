<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyAdvertisementDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('property_advertisement_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_advertisement_id');
            $table->string('title');
            $table->text('description');
            $table->text('content');
            $table->unsignedBigInteger('city_id');
            $table->integer('square');
            $table->integer('rent_period');
            $table->integer('Bedrooms');
            $table->integer('beds');
            $table->unsignedBigInteger('location_id');
            $table->unsignedBigInteger('currency_id');
            $table->boolean('auto_renew');
            $table->integer('Floors');
            $table->string('Nearby');
            $table->integer('price');
            $table->string('video_url');
            $table->json('features');
            $table->json('facilities');
            $table->string('seo_title');
            $table->string('seo_description');
            $table->string('seo_link');
            $table->timestamps();

            $table->foreign('property_advertisement_id')->references('id')->on('property_advertisements');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('location_id')->references('id')->on('locations');
            $table->foreign('currency_id')->references('id')->on('currencies');
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_advertisement_details');
    }
}
