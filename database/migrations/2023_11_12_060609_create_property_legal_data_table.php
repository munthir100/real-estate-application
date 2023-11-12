<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('property_legal_data', function (Blueprint $table) {
            $table->id();
            $table->string('license_number');
            $table->date('date_of_license');
            $table->date('license_expiration_date');
            $table->string('postal_code');
            $table->string('building_number');
            $table->string('additional_number')->nullable();
            $table->boolean('has_restriction')->default(false);
            $table->boolean('has_mortgage')->default(false);
            $table->text('obligations_on_property')->nullable();
            $table->timestamps();
            $table->foreignId('property_id')
                ->references('id')
                ->on('properties')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_legal_information');
    }
};
