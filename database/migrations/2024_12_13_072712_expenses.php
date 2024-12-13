<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date'); // Default to current date
            $table->decimal('amount', 15, 2);
            $table->foreignId('expense_type_id')->constrained('expense_sources')->onDelete('cascade');
            $table->text('description')->nullable();
            $table->foreignId('paid_by')->constrained('employees')->onDelete('cascade');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
