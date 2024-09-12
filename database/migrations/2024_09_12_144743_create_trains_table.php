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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 30);
            $table->string('departure_station', 50);
            $table->string('arrival_station', 50);
            $table->datetime('departure_date');
            $table->datetime('arrival_date');
            $table->string('train_code', 15);
            $table->smallInteger('carriages_number')->unsigned();
            $table->boolean('is_on_time')->default(1);
            $table->boolean('is_canceled')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
