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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('team_name', 255);
            $table->string('position', 255);
            $table->string('coach_name', 255);
            $table->string('manager_name', 255);
            $table->string('gender', 20);
            $table->string('group', 50);
            $table->string('street', 50);
            $table->string('city', 50);
            $table->string('zip_code', 20);
            $table->string('country', 50);
            $table->string('image', 255);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
