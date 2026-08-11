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
            $table->string('created_by')->constrained('users')->restrictOnDelete();
            $table->string('approved_by')->constrained('users')->restrictOndelete();
            $table->date('order_date');
            $table->date('expected_delivery_date');
            $table->enum('status', ['draft', 'pending', 'approved', 'cancelled', 'completed'])->default('pending');
            $table->text('notes')->nullable();
            $table->date('approved_at');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('purchase_orders');
    }
};
