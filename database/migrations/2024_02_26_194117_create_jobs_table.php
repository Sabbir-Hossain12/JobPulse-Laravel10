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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->text('responsibilities');
            $table->text('requirement');

            $table->string('location');
            $table->string('salary_range')->comment('15000tk-20000tk');
            $table->timestamp('posted_at')->useCurrent();
            $table->date('deadline');
            $table->boolean('is_active')->default('1')->comment('1=active,0=inactive');

            $table->unsignedBigInteger('employer_id');
            $table->foreign('employer_id')->references('id')->on('employers');

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('job_categories');






            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
