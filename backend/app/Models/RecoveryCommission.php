<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecoveryCommission extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',              // Recovery date
        'customer_id',       // Links to Customer
        'bad_book_aging',    // Aging of the bad debt
        'current_bad_book',  // Current bad book amount
        'amount_recovered',  // Amount recovered
        'recovered_by',      // Employee ID who recovered the amount
        'commission_rate',   // Commission rate in percentage
        'commission_paid',   // Commission paid to the employee
        'bad_book_balance',  // Remaining bad book balance
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'recovered_by');
    }
}
