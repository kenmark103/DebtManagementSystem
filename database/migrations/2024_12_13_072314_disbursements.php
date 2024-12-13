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
        Schema::create('disbursements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained()->onDelete('cascade');
            $table->foreignId('rm_id')->constrained('employees')->onDelete('cascade');
            $table->string('status')->default('Pending'); // Default to Pending
            $table->decimal('amount_taken', 15, 2);
            $table->date('date_taken')->default(DB::raw('CURRENT_DATE')); // Default to current date
            $table->decimal('expected_pay_back', 15, 2)->default(0); // Default to zero
            $table->date('completion_date')->nullable();
            $table->decimal('processing_fee', 15, 2)->default(0); // Default to zero
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
