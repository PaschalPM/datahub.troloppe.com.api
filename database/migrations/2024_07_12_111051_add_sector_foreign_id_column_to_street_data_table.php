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
        Schema::table('street_data', function (Blueprint $table) {
            $table->foreignId('sector_id')->constrained('sectors')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('street_data', function (Blueprint $table) {
            
            $table->dropForeign(['sector_id']);
            $table->dropColumn('sector_id');
        });
    }
};