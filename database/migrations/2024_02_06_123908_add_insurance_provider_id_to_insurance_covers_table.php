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
        Schema::table('insurance_covers', function (Blueprint $table) {
            $table->unsignedBigInteger('insurance_provider_id');
            $table->foreign('insurance_provider_id')->references('id')->on('insurance_providers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('insurance_covers', function (Blueprint $table) {
            $table->dropForeign(['insurance_provider_id']);
            $table->dropColumn('insurance_provider_id');
        });
    }
};
