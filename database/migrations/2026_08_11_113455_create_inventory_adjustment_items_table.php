<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inventory_adjustment_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('inventory_adjustment_id')->constrained('inventory_adjustments')->rejectOnDelete();
            $table->foreignId('product_id')->constrained()->rejectOnDelete();
            $table->foreignId('warehouse_location_id')->constrained()->rejectOnDelete();

            $table->integer('old_quantity');
            $table->integer('new_quantity');
            $table->integer('difference');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inventory_adjustment_items');
    }
};
