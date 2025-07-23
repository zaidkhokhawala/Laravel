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
    Schema::create('users', function (Blueprint $table) {
        $table->id(); // Auto-increment primary key
        $table->string('username'); // Username (NOT unique)
        $table->string('email')->unique(); // Email must be unique
        $table->string('phone_no'); // Phone number is now required
        $table->string('password'); // Password (hashed)
       
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
