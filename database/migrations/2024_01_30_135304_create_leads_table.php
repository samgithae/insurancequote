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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("phone");
            $table->string("email")->nullable();
            $table->string("valued_in_last_18_months");
            $table->string("vehicle_use");
            $table->bigInteger("vehicle_value");
            $table->string("vehicle_type")->nullable();
            $table->string("vehicle_model");
            $table->string("yom",4);
            $table->date("cover_start_date");
            $table->integer("passenger_count")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
