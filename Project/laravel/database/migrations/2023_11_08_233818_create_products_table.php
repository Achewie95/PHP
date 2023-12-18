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
            $table->id();

            $table->integer('ProductID');
            $table->string('Name');
            $table->string('Description');
            $table->decimal('Price', 10, 2);
            $table->string('Category');
            $table->integer('Weight');
            $table->string('Manufacturer');
            $table->integer('Stock Quantity');
            $table->string('SKU');
            $table->string('ImageURL');

            $table->timestamps();
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
