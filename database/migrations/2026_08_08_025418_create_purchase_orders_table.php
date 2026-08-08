<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('purchase_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('supplier_id')->constrained()->cascadeOnDelete();
            $table->string('po_number')->unique();
            $table->date('order_date');
            $table->date('expected_delivery_date');
            $table->enum('status', ['draft', 'pending', 'approved', 'cancelled', 'completed'])->default('pending');
            $table->text('remarks')->nullable();
            $table->string('created_by');
            $table->string('approved_by');
            $table->date('approved_at');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('purchase_orders');
    }
};
