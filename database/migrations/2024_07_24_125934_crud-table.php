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
        Schema::create('sample_data', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('email', 75);
            $table->string('message', 250);
            $table->string('gender', 6);
            $table->string('location', 10)->nullable();
            $table->string('contact', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sample_data');
    }
};
