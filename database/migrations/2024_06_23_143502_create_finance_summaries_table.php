<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('finance_summaries', function (Blueprint $table) {
            $table->id();
            $table->decimal('total_balance', 15, 2);
            $table->decimal('total_expenditure', 15, 2);
            $table->decimal('remaining_balance', 15, 2);
            $table->date('month_and_year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('finance_summaries');
    }
};
