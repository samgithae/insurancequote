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
        Schema::create('insurance_cover_rates', function (Blueprint $table) {
            $table->id();
            $table->string("insurance_cover_name");
            $table->integer("minimum_value")->nullable();
            $table->integer("maximum_value")->nullable();
            $table->integer("basic_rate")->nullable();
            $table->integer("minimum_premium")->nullable();
            $table->string("description")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insurance_cover_rates');
    }
};
