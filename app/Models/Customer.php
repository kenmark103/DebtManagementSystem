<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',           // Customer name
        'contact',        // Contact information
        'address',        // Address of the customer
        'date_joined',    // Date the customer joined
        'status',         // Status of the customer
    ];

    public function disbursements()
    {
        return $this->hasMany(Disbursement::class);
    }

    public function recoveryCommissions()
    {
        return $this->hasMany(RecoveryCommission::class);
    }
}
