<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\MarriageStatus;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MarriageStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentDateTime = Carbon::now();

        $data = [
            [
                'status' => 'menikah',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'status' => 'belum menikah',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ]
        ];

        MarriageStatus::insert($data);
    }
}
