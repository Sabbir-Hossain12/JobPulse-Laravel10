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
        Schema::create('employer_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employer_id');
            $table->foreign('employer_id')->references('id')->on('employers');

            $table->string('employer_details');
            $table->string('location');
            $table->string('website_url');
            $table->enum('employer_type',['Government','Private','NGO']);
            $table->enum('company_size',['Small','medium','large']);


            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employer_details');
    }
};
