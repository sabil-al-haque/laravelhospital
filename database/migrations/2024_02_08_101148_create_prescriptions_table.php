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
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('appointments_id')->nullable;
            $table->foreignId('patients_id')->nullable;
            $table->foreignId('doctors_id')->nullable;
            $table->string('date')->nullable;
            $table->string('medication')->nullable;
            $table->string('additional_inf')->nullable;
            $table->string('sign_of_doctor')->nullable;
            $table->string('signed_date')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prescriptions');
    }
};
