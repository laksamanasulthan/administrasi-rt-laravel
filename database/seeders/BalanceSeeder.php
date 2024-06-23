<?php

namespace Database\Seeders;

use App\Models\Balance;
use App\Models\ResidentContribution;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BalanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $sumOfContribution = ResidentContribution::sum('nominal');

        Balance::create([
            'current_balance' => $sumOfContribution,
        ]);
    }
}
