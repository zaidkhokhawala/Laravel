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
    Schema::create('offers', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->decimal('r_price', 8, 2)->nullable(); // Regular Price
        $table->decimal('o_price', 8, 2)->nullable(); // Offer Price
        $table->string('image')->nullable();
        $table->unsignedBigInteger('cat_id');
        // no timestamps
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
