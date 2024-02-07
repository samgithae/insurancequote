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
        Schema::table('benefits', function (Blueprint $table) {
            $table->unsignedBigInteger('insurance_cover_id')->nullable();
            $table->foreign('insurance_cover_id')->references('id')->on('insurance_covers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('benefits', function (Blueprint $table) {
            $table->dropForeign(['insurance_cover_id']);
            $table->dropColumn('insurance_cover_id');
        });
    }
};
