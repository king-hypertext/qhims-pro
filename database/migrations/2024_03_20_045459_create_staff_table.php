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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('mid_name')->nullable();
            $table->string('last_name');
            $table->string('fullname')->virtualAs('CONCAT(first_name, " ", last_name, " ", mid_name)');
            $table->string('phone_number');
            $table->string('address');
            $table->string('fathers_name')->nullable();
            $table->string('mothers_name')->nullable();
            $table->enum('gender', ['male', 'female']);
            $table->enum('is_active', [1, 0])->default(1);
            $table->date('date_of_birth');
            $table->string('religion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
