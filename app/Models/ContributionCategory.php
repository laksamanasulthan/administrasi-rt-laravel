<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContributionCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'created_at',
        'updated_at',
    ];

    public function contributionCategoryHasManyResidentContribution()
    {
        return $this->hasMany(ResidentContribution::class, 'contribution_category_id');
    }
}
