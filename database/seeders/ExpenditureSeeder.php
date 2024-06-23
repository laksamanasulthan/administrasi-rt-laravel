<?php

namespace Database\Seeders;

use App\Models\Expenditure;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExpenditureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userId = User::where('email', 'suwandi@rt.com')->first();
        $currentDateTime = Carbon::now();

        $data = [
            [
                'user_id' => $userId->id,
                'needs' => 'perbaikan toa masjid',
                'nominal' => 2000000,
                'date' => '2024-06-01',
                'description' => 'Perbaikan berlokasi pada Blok 5C, dengan Toa hasil produksi Malang Steell',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime
            ],
            [
                'user_id' => $userId->id,
                'needs' => 'perbaikan lampu',
                'nominal' => 1000000,
                'date' => '2024-06-01',
                'description' => 'Perbaikan Lampu pada pintu masuk Perumahan, dan area publik perumahan',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime
            ]
        ];

        Expenditure::insert($data);
    }
}
