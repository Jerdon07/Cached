<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('stock_transfers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('from_warehouse_id')->constrained('warehouses')->restrictOnDelete();
            $table->foreignId('to_warehouse_id')->constrained('warehouses')->restrictOnDelete();

            $table->enum('status', ['draft', 'pending', 'approved', 'in_transit', 'received', 'cancelled', 'rejected']);
            $table->foreignId('requested_by')->constrained('users')->restrictOnDelete()->nullable();
            $table->foreignId('approved_by')->constrained('users')->restrictOnDelete()->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stock_transfers');
    }
};
