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
            $table->foreignId('product_id')->constrained()->restrictOnDelete();
            $table->foreignId('supplier_id')->constrained()->restrictOnDelete();

            $table->string('supplier_sku')->nullable();
            $table->decimal('cost_price', 12, 3);
            $table->boolean('preferred');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_suppliers');
    }
};
