<?php

namespace Database\Seeders;

use App\Models\HousingStatus;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HousingStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentDateTime = Carbon::now();

        $data = [
            [
                'status' => 'dihuni',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime
            ],
            [
                'status' => 'tidak dihuni',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime
            ]
        ];

        HousingStatus::insert($data);
    }
}
