<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disbursement extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',       // Links to Customer
        'rm_id',             // Relationship Manager ID (Employee)
        'status',            // Status of the disbursement
        'amount_taken',      // Amount disbursed
        'date_taken',        // Date of disbursement
        'expected_pay_back', // Expected payback amount
        'completion_date',   // Completion date
        'processing_fee',    // Processing fee
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function relationshipManager()
    {
        return $this->belongsTo(Employee::class, 'rm_id');
    }
}
