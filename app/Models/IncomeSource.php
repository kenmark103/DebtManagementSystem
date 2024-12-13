<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncomeSource extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',           // Name of the income source
        'description',    // Description of the income source
    ];

    public function cashFlowRecords()
    {
        return $this->hasMany(CashFlowRecord::class);
    }
}
