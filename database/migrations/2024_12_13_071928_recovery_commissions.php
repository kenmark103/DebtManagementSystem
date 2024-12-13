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
        Schema::create('recovery_commissions', function (Blueprint $table) {
            $table->id();
            $table->date('date')->default(DB::raw('CURRENT_DATE')); // Default to current date
            $table->foreignId('customer_id')->constrained()->onDelete('cascade');
            $table->string('bad_book_aging');
            $table->decimal('current_bad_book', 15, 2);
            $table->decimal('amount_recovered', 15, 2);
            $table->foreignId('recovered_by')->constrained('employees')->onDelete('cascade');
            $table->decimal('commission_rate', 5, 2)->default(0); // Default commission rate
            $table->decimal('commission_paid', 15, 2)->default(0); // Default commission paid
            $table->decimal('bad_book_balance', 15, 2)->default(0); // Default remaining balance
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
