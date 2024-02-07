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
        Schema::create('insurance_covers', function (Blueprint $table) {
            $table->id();
            $table->string("insurer");
            $table->string("cost");
            $table->integer("minimum_value");
            $table->integer("maximum_value");
            $table->integer("basic_rate");
            $table->integer("minimum_premium");
            $table->string("description")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insurance_covers');
    }
};
