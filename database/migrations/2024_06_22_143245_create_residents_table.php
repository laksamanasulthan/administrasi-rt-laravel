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
        Schema::create('residents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resident_status_id')->nullable()->constrained('resident_statuses')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreignId('marriage_status_id')->nullable()->constrained('marriage_statuses')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->string('full_name');
            $table->string('id_card');
            $table->string('telp_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('residents');
    }
};
