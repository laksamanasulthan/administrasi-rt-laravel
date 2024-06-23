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
        Schema::create('resident_contributions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resident_id')->nullable()->constrained('residents')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreignId('contribution_category_id')->nullable()->constrained('contribution_categories')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->decimal('nominal', 15, 2);
            $table->date('start_date');
            $table->date('end_date');
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resident_contributions');
    }
};
