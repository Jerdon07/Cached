<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_suppliers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete();
            $table->foreignId('supplier_id')->constrained()->cascadeOnDelete();

            $table->string('supplier_sku')->nullable();
            $table->integer('cost_price');
            $table->boolean('preferred');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_suppliers');
    }
};
