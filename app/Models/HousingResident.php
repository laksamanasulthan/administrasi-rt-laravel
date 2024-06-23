<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HousingResident extends Model
{
    use HasFactory;

    protected $fillable = [
        'house_id',
        'resident_id',
        'activity_status',
        'payment',
        'end_date',
        'start_date',
        'description',
        'created_at',
        'updated_at',
    ];

    public function housingResidentBelongsToHouse()
    {
        return $this->belongsTo(House::class, 'house_id');
    }

    public function housingResidentBelongsToResident()
    {
        return $this->belongsTo(Resident::class, 'resident_id');
    }
}
