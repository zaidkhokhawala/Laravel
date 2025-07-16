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
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Auto-increment ID
            $table->string('name'); // Product name
            $table->decimal('price', 10, 2); // ✅ Add this line
            $table->string('image'); // Image path or filename
            $table->unsignedBigInteger('cat_id'); // Foreign key from categories
            // Foreign key constraint
            $table->foreign('cat_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
