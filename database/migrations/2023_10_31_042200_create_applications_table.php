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
            $table->timestamps();

            $table->foreignId('property_id')
                ->references('id')
                ->on('properties')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });
    }

    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
