<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashFlowRecord extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',            // Date of the record
        'category_id',     // Category of the transaction
        'source_id',       // Source ID (Expense or Income)
        'source_type',     // Source type: ExpenseSource or IncomeSource
        'amount',          // Transaction amount
        'description',     // Description of the transaction
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function source()
    {
        return $this->morphTo();
    }
}
