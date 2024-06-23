<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            UserSeeder::class,
            ContributionCategorySeeder::class,
            ResidentStatusSeeder::class,
            MarriageStatusSeeder::class,
            HousingStatusSeeder::class,

            HouseSeeder::class,
            ResidentSeeder::class,
            HousingResidentSeeder::class,

            ResidentContributionSeeder::class,

            BalanceSeeder::class,
            ExpenditureSeeder::class,
            FinanceSummarySeeder::class,
        ]);
    }
}
