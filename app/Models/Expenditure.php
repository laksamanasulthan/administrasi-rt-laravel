<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expenditure extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'needs',
        'nominal',
        'date',
        'created_at',
        'updated_at',
    ];

    public function expenditureBelongsToUser()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
