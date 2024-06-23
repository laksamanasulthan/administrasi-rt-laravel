<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinanceSummary extends Model
{
    use HasFactory;

    protected $fillable = [
        'total_balance',
        'total_expenditure',
        'remaining_balance',
        'month',
        'year',
        'created_at',
        'updated_at',
    ];
}
