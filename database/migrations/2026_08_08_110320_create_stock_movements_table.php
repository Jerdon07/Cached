<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('stock_movements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete();
            $table->foreignId('warehouse_location_id')->constrained()->cascadeOnDelete();

            $table->enum('movement_type', ['sale', 'transfer in', 'transfer out', 'adjustment', 'return', 'damage', 'loss', 'count correction']);
            $table->decimal('quantity', 12, 3);
            $table->nullableMorphs('reference');
            $table->foreignId('performed_by')->constrained('users')->restrictOnDelete();
            $table->text('remarks')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stock_movements');
    }
};
