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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->uuid('staff_id');
            $table->foreign('staff_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('first_name');
            $table->string('mid_name')->nullable();
            $table->string('last_name');
            $table->string('full_name')->virtualAs('CONCAT(first_name," ",last_name," ",mid_name)')->nullable();
            $table->year('years_of_experience')->default(0);
            $table->string('email')->unique();
            $table->string('phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
