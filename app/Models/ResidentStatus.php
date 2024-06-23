<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResidentStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'created_at',
        'updated_at',
    ];

    public function residentStatusHasManyResident()
    {
        return $this->hasMany(Resident::class, 'resident_status_id');
    }
}
