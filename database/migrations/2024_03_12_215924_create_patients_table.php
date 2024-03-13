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
        Schema::create('patients', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('first_name');
            $table->string('mid_name')->nullable();
            $table->string('last_name');
            $table->string('full_name')->virtualAs('CONCAT(first_name," ",last_name," ",mid_name)')->nullable();
            $table->string('address');
            $table->string('phone_number');
            $table->string('email')->nullable()->unique()->default('N/A');
            $table->enum('gender', ['male', 'female']);
            $table->string('religion')->nullable()->default('N/A');
            $table->enum('blood_type', ['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-'])->nullable();
            $table->enum('is_staff', [1, 0])->default(0);
            $table->string('staff_id')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
