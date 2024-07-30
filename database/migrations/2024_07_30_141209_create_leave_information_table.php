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
        Schema::create('leave_information', function (Blueprint $table) {
            $table->id();
            $table->string('year_leave')->nullable();
            $table->string('medical_leave')->nullable();
            $table->string('casual_leave')->nullable();
            $table->string('sick_leave')->nullable();
            $table->string('annual_leave')->nullable();
            $table->string('use_leave')->nullable();
            $table->string('remaining_leave')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leave_information');
    }
};
