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

        DB::table('leave_information')->insert([
            ['year_leave'=> date('Y'),'medical_leave' => '04','casual_leave' => '08','sick_leave' => '05','annual_leave' => '12','use_leave' => '09','remaining_leave' => '18'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leave_information');
    }
};
