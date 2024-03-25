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
        Schema::create('patient_medical_records', function (Blueprint $table) {
            $table->id();
            $table->uuid('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients')->onUpdate('cascade')->onDelete('cascade');
            $table->string('sugar')->nullable();
            $table->string('pulse')->nullable();
            $table->string('temperature')->nullable();
            $table->enum('blood_group', ['A+','A-','B+', 'B-','O-','O+','AB+','AB-'])->nullable();
            $table->longText('doctor_report')->nullable();
            $table->longText('diagnosis')->nullable();
            // to be implemented later
            $table->foreignId('doctor_id')->references('id')->on('doctors')->cascadeOnDelete()->cascadeOnUpdate();
            $table->date('record_date')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_medical_records');
    }
};
