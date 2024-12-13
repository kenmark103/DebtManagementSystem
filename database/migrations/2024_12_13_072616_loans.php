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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained()->onDelete('cascade');
            $table->decimal('amount_issued', 15, 2);
            $table->decimal('interest_rate', 5, 2)->default(0); // Default interest rate
            $table->date('repayment_start_date')->default(DB::raw('CURRENT_DATE')); // Default to current date
            $table->date('repayment_end_date')->nullable();
            $table->enum('loan_status', ['Active', 'Paid', 'Defaulted'])->default('Active'); // Default to Active
            $table->decimal('total_payable', 15, 2)->default(0); // Default total payable
            $table->decimal('remaining_balance', 15, 2)->default(0); // Default balance
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
