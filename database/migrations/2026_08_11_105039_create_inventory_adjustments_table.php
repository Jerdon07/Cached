<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inventory_adjustments', function (Blueprint $table) {
            $table->id();
            $table->integer('adjustment_number');
            $table->text('reason');
            $table->enum('status', ['draft', 'pending', 'approved', 'rejected', 'cancelled', 'completed'])->default('pending');
            $table->foreignId('created_by')->constrained('users')->rejectOnDelete();
            $table->foreignId('approved_by')->constrained('users')->rejectOnDelete();
            $table->date('approved_at');
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inventory_adjustments');
    }
};
