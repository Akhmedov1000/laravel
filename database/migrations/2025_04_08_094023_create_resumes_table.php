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
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->string('experience')->nullable();
            $table->string('education')->nullable();
            $table->string('skills')->nullable();
            $table->string('desired_position')->nullable();
            $table->string('salary_expectation')->nullable();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('Applications_id')->constrained('applications');
            $table->foreignId('Applications_resumes_id')->constrained('applications_resumes');
            $table->foreignId('Applications_vacancies_id')->constrained('applications_vacancies');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resumes');
    }
};
