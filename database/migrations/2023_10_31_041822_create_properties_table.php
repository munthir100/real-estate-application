<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('label')->nullable();
            $table->text('description')->nullable();
            $table->integer('square')->default(0)->nullable();
            $table->enum('period', ['day','month', 'year']);
            $table->integer('number_of_bedrooms')->default(0)->nullable();
            $table->integer('number_of_bathrooms')->default(0)->nullable();
            $table->integer('number_of_beds')->default(0)->nullable();
            $table->integer('number_of_floors')->default(0)->nullable();
            $table->integer('price')->default(0)->nullable();
            $table->string('video_url')->nullable();
            $table->string('seo_title')->nullable();
            $table->string('seo_description')->nullable();
            $table->string('seo_link')->nullable();
            $table->boolean('is_ad')->default(false);
            $table->timestamps();

            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('property_type_id')->references('id')->on('property_types');
            $table->foreignId('status_id')->nullable()->references('id')->on('statuses');
            $table->foreignId('city_id')->nullable()->references('id')->on('cities');
            $table->foreignId('category_id')->nullable()->references('id')->on('categories');
            $table->foreignId('location_id')->references('id')->on('locations');
            $table->foreignId('currency_id')->references('id')->on('currencies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
