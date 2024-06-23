<?php

namespace Database\Seeders;

use App\Models\House;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentDateTime = Carbon::now();

        for ($i = 1; $i < 21; $i++) {
            $data[] = [
                'housing_status_id' =>  1,
                'no' => $i,
                'area' => '140m2',
                'address' => 'Blok ' . $i . ', Jalan Merak, Kec. Kapulaga, Jawa Barat',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ];
        }

        House::insert($data);
    }
}
