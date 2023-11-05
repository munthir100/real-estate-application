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
            $table->timestamps();

            $table->foreignId('user_type_id')
                ->default(UserType::BROWSER)
                ->references('id')
                ->on('user_types');

            $table->foreignId('plan_id')->nullable()->references('id')->on('plans');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
