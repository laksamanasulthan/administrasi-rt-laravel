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
        Schema::create('housing_residents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resident_id')->nullable()->constrained('residents')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreignId('house_id')->nullable()->constrained('houses')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->boolean('activity_status');
            $table->decimal('payment', 15, 2)->nullable();
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->longText('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('housing_residents');
    }
};
