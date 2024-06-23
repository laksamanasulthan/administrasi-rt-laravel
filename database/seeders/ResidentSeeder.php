<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Resident;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ResidentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentDateTime = Carbon::now();

        for ($i = 1; $i < 41; $i++) {
            $data[] = [
                'resident_status_id' => $i >= 30 ? 2 : 1,
                'marriage_status_id' => $i >= 30 ? 2 : 1,
                'full_name' => 'John Doe the ' . $i,
                'id_card' => '3009283827.jpg',
                'telp_number' => '08123456789' . $i,
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ];
        }

        Resident::insert($data);
    }
}
