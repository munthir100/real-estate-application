<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->text('message');
            $table->timestamps();

            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('status_id')->references('id')->on('statuses');
        });
    }

    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}
