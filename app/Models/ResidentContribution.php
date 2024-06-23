<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResidentContribution extends Model
{
    use HasFactory;

    protected $fillable = [
        'contribution_category_id',
        'resident_id',
        'nominal',
        'start_date',
        'end_date',
        'created_at',
        'updated_at',
    ];

    public function ResidentContributionBelongsToResident()
    {
        return $this->belongsTo(Resident::class, 'resident_id');
    }

    public function ResidentContributionBelongsToContributionCategory()
    {
        return $this->belongsTo(ContributionCategory::class, 'contribution_category_id');
    }
}
