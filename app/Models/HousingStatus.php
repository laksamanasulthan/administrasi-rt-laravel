<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HousingStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'created_at',
        'updated_at',
    ];

    public function housingStatusHasManyHouse()
    {
        return $this->hasMany(House::class, 'housing_status_id');
    }
}
