<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use App\Models\ResidentContribution;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ResidentContributionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentDateTime = Carbon::now();

        for ($i = 1; $i < 41; $i++) {
            $data1[] = [
                'contribution_category_id' => 1,
                'resident_id' => $i,
                'nominal' => 100000,
                'start_date' => '2024-06-01',
                'end_date' => '2024-07-01',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ];
            $data2[] = [
                'contribution_category_id' => 2,
                'resident_id' => $i,
                'nominal' => 50000,
                'start_date' => '2024-06-01',
                'end_date' => '2024-07-01',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ];
        }

        $mergeArray = array_merge($data1, $data2);

        ResidentContribution::insert($mergeArray);
    }
}
