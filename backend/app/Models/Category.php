<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',           // Name of the category
        'type',           // Type: INCOME or EXPENSE
        'description',    // Description of the category
    ];

    public function cashFlowRecords()
    {
        return $this->hasMany(CashFlowRecord::class);
    }
}
