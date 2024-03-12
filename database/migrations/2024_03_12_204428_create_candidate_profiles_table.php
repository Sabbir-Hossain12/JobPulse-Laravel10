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
        Schema::create('candidate_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('img')->nullable();
            $table->string('contact_number');
            $table->string('address');
            $table->string('portfolio_url')->nullable();
            $table->string('linkedin_url')->nullable();

            $table->unsignedBigInteger('education_id');
            $table->foreign('education_id')->references('id')->on('educations');

            $table->unsignedBigInteger('experience_id');
            $table->foreign('experience_id')->references('id')->on('experiences');

            $table->unsignedBigInteger('training_id');
            $table->foreign('training_id')->references('id')->on('trainings');

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidate_profiles');
    }
};
