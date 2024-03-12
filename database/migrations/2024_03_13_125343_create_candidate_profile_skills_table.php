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
        Schema::create('candidate_profile_skills', function (Blueprint $table) {

            $table->unsignedBigInteger('skill_id');
            $table->foreign('skill_id')->references('id')->on('skills');

            $table->unsignedBigInteger('candidate_profile_id');
            $table->foreign('candidate_profile_id')->references('id')->on('candidate_profiles');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidate_profile_skills');
    }
};
