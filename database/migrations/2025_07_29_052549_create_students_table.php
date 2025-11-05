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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');                  // Full Name
            $table->string('email')->unique();       // Email Address
            $table->string('phone')->nullable();     // Phone Number
            $table->date('dob')->nullable();         // Date of Birth
            $table->string('color')->nullable();     // Favorite Color
            $table->timestamps();                    // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};


