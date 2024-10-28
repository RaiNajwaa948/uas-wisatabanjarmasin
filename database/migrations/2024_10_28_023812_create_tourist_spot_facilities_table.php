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
        Schema::create('tourist_spot_facilities', function (Blueprint $table) {
            $table->foreignId('tourist_spot_id')->constrained('tourist_spots')->cascadeOnDelete();
        $table->foreignId('facility_id')->constrained('facilities')->cascadeOnDelete();
        $table->primary(['tourist_spot_id', 'facility_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tourist_spot_facilities');
    }
};
