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
        Schema::create('property_features', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            // Manually specify foreign key constraint names
            $table->foreignId('property_id')
                ->references('id')
                ->on('properties')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreignId('feature_id')
                ->references('id')
                ->on('features')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_features');
    }
};
