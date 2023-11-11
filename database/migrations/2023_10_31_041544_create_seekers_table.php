<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeekersTable extends Migration
{
    public function up()
    {
        Schema::create('seekers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('user_id')
                ->references('id')
                ->on('users')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });
    }

    public function down()
    {
        Schema::dropIfExists('seekers');
    }
}
