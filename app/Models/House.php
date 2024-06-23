<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $fillable = [
        'housing_status_id',
        'no',
        'area',
        'address',
        'created_at',
        'updated_at',
    ];

    public function houseBelongsToHousingStatus()
    {
        return $this->belongsTo(HousingStatus::class, 'housing_status_id');
    }

    public function houseHasManyHousingResident()
    {
        return $this->hasMany(HousingResident::class, 'house_id');
    }
}
