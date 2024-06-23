<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    use HasFactory;

    protected $fillable = [
        'resident_status_id',
        'marriage_status_id',
        'full_name',
        'id_card',
        'telp_number',
        'created_at',
        'updated_at',
    ];

    public function residentBelongsToResidentStatus()
    {
        return $this->belongsTo(ResidentStatus::class, 'resident_status_id');
    }

    public function residentBelongsToMarriageStatus()
    {
        return $this->belongsTo(MarriageStatus::class, 'marriage_status_id');
    }

    public function residentHasManyHousingResident()
    {
        return $this->hasMany(HousingResident::class, 'resident_id');
    }

    public function residentHasManyResidentContribution()
    {
        return $this->hasMany(ResidentContribution::class, 'resident_id');
    }
}
