<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->cascadeOnDelete();
            $table->foreignId('brand_id')->cascadeOnDelete();
            $table->foreignId('unit_id')->cascadeOnDelete();

            $table->string('name')-> unique();
            $table->string('sku')->nullable();
            $table->string('barcode')->nullable();
            $table->string('description')->nullable();
            $table->integer('selling_price');
            $table->integer('minimum_stock');
            $table->boolean('is_active');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
