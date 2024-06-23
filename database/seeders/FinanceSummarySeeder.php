<?php

namespace Database\Seeders;

use App\Models\FinanceSummary;
use App\Models\ResidentContribution;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FinanceSummarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FinanceSummary::create([
            'total_balance' => 6000000,
            'total_expenditure' => 3000000,
            'remaining_balance' => 3000000,
            'month_and_year' => '2024-06-01',
        ]);
    }
}
