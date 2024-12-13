<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseSource extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',           // Name of the expense source
        'description',    // Description of the expense source
    ];

    public function cashFlowRecords()
    {
        return $this->hasMany(CashFlowRecord::class);
    }
}
