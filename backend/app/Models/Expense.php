<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    // The table associated with the model (optional if the table name follows Laravel's convention)
    protected $table = 'expenses';

    // Fillable attributes (you can change this based on what attributes you'd like to allow mass assignment for)
    protected $fillable = [
        'date',
        'amount',
        'expense_type_id',
        'description',
        'paid_by',
    ];

    // Define the relationship with ExpenseSource
    public function expenseSource()
    {
        return $this->belongsTo(ExpenseSource::class, 'expense_type_id');
    }

    // Define the relationship with Employee (paid_by)
    public function paidBy()
    {
        return $this->belongsTo(Employee::class, 'paid_by');
    }
}
