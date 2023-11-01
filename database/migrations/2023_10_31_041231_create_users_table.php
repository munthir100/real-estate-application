<?php

use App\Models\UserType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username')->unique();
            $table->string('phone');
            $table->text('description')->nullable();
            $table->date('birth_date');
            $table->string('email')->unique();
            $table->enum('gender', ['male', 'female']);
            $table->string('password');
            $table->unsignedBigInteger('user_type_id')->default(UserType::BROWSER);
            $table->unsignedBigInteger('plan_id')->nullable();
            $table->timestamps();

            $table->foreign('user_type_id')->references('id')->on('user_types');
            $table->foreign('plan_id')->references('id')->on('plans');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
