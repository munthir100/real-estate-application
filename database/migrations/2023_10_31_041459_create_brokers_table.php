<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrokersTable extends Migration
{
    public function up()
    {
        Schema::create('brokers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('is_developer')->default(false);
            $table->string('commercial_registration')->nullable();
            $table->string('license_number')->nullable();
            $table->string('val_license_number')->nullable();
            $table->foreignId('user_id')
                ->references('id')
                ->on('users')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('brokers');
    }
}
