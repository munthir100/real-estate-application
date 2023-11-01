<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_advertisement_id');
            $table->timestamps();

            $table->foreign('property_advertisement_id')->references('id')->on('property_advertisements');
        });
    }

    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
