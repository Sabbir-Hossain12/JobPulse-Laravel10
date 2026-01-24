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
        Schema::table('candidate_profiles', function (Blueprint $table) {
            $table->renameColumn('contact_number', 'phone'); // Rename existing column
            $table->text('bio')->nullable(); // Add bio column
            $table->string('experience_level')->nullable(); // Add experience level
            $table->string('expected_salary')->nullable(); // Add expected salary
            $table->string('availability')->nullable(); // Add availability
            $table->string('cv_path')->nullable(); // Add CV path
            $table->string('profile_image')->nullable(); // Add profile image
            $table->date('date_of_birth')->nullable(); // Add date of birth
            $table->enum('gender', ['Male', 'Female', 'Other'])->nullable(); // Add gender
            $table->string('nationality')->nullable(); // Add nationality
            $table->string('state_of_origin')->nullable(); // Add state of origin
            $table->string('lga')->nullable(); // Add LGA
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('candidate_profiles', function (Blueprint $table) {
            $table->renameColumn('phone', 'contact_number'); // Rename back to original
            $table->dropColumn([
                'bio',
                'experience_level',
                'expected_salary',
                'availability',
                'cv_path',
                'profile_image',
                'date_of_birth',
                'gender',
                'nationality',
                'state_of_origin',
                'lga'
            ]);
        });
    }
};
