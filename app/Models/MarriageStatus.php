<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarriageStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'created_at',
        'updated_at',
    ];

    public function marriageStatusHasManyResident()
    {
        return $this->hasMany(Resident::class, 'marriage_status_id');
    }
}
