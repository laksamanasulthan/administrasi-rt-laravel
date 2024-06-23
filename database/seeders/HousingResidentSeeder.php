<?php

namespace Database\Seeders;

use App\Models\HousingResident;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HousingResidentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentDateTime = Carbon::now();

        for ($i = 1; $i < 21; $i++) {
            $data1[] = [
                'house_id' => $i,
                'resident_id' => $i + 20,
                'activity_status' => 1,
                'payment' => $i <= 15 ? 500000000 : 1000000,
                'start_date' => '2017-01-02',
                'end_date' => null,
                'description' => 'Current Resident',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ];

            $data2[] = [
                'house_id' => $i,
                'resident_id' => $i,
                'activity_status' => 0,
                'payment' => $i <= 15 ? 500000000 : 1000000,
                'start_date' => '2010-01-02',
                'end_date' => '2017-01-02',
                'description' => 'Past Resident',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ];
        }

        $mergeArray = array_merge($data1, $data2);

        HousingResident::insert($mergeArray);
    }
}
