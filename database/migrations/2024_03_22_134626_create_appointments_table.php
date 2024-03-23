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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->uuid('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('doctor_id');
            $table->foreign('doctor_id')->references('id')->on('doctors')->onUpdate('cascade')->onDelete('cascade');
            $table->string('modality');
            $table->string('study');
            $table->string('duration');
            $table->enum('status', ['scheduled', 'cancelled', 'completed']);
            $table->time('app_time')->useCurrent();
            $table->date('app_date')->useCurrentOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
