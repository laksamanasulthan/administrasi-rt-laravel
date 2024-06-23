<?php

namespace Database\Seeders;

use App\Models\ContributionCategory;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContributionCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $currentDateTime = Carbon::now();

        $data = [
            [
                'category' => 'Iuran Kebersihan',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime
            ],
            [
                'category' => 'Iuran Satpam',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime
            ]
        ];

        ContributionCategory::insert($data);
    }
}
