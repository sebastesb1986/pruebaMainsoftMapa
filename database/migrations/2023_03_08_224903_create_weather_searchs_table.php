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
        Schema::create('weatherSearchs', function (Blueprint $table) {
            $table->id();

            $table->string('name', 200);
            $table->string('humedity', 200);
            $table->string('country', 200);
            $table->string('latitude', 250);
            $table->string('longitude', 250);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weatherSearchs');
    }
};
