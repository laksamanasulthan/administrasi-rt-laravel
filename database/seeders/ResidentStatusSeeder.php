<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\ResidentStatus;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ResidentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentDateTime = Carbon::now();

        $data = [
            [
                'status' => 'tetap',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'status' => 'kontrak',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ]
        ];

        ResidentStatus::insert($data);
    }
}
