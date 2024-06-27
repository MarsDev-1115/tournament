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
        Schema::create('tournaments', function (Blueprint $table) {
            $table->id();
            $table->string('tournament_name', 255);
            $table->date('fromDate');
            $table->date('toDate');
            $table->string('fromTime', 10);
            $table->string('toTime', 10);
            $table->string('website', 255);
            $table->string('street', 50);
            $table->string('city', 50);
            $table->string('zip_code', 20);
            $table->string('country', 50);
            $table->string('category', 50);
            $table->string('category2', 50);
            $table->string('gender', 20);
            $table->string('group', 50);
            $table->string('number_of_groups', 10);
            $table->string('number_fo_teams', 10);
            $table->string('game_time', 10);
            $table->string('playtime', 10);
            $table->string('pitch', 50);
            $table->string('image', 255);
            $table->string('privacy', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tournaments');
    }
};
