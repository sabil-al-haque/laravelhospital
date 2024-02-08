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
            $table->string('name')->nullable;
            $table->string('age')->nullable;
            $table->string('gender')->nullable;
            $table->string('phone')->nullable;
            $table->string('email')->nullable;
            $table->string('address')->nullable;
            $table->string('city')->nullable;
            $table->string('area')->nullable;
            $table->string('zip')->nullable;
            $table->string('date')->nullable;
            $table->string('availability')->nullable;
            $table->string('start')->nullable;
            $table->string('end')->nullable;
            $table->string('status')->nullable;
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
