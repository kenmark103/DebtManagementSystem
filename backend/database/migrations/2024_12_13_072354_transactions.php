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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('voucher_no')->unique();
            $table->timestamp('date'); // Default to current date
            $table->string('payee');
            $table->text('description')->nullable();
            $table->enum('type', ['IN', 'OUT', 'TRANSFER'])->default('IN'); // Default type
            $table->decimal('amount', 15, 2);
            $table->decimal('running_balance', 15, 2)->default(0); // Default balance
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->text('remarks')->nullable();
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
