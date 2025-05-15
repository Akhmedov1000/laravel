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
        Schema::create('vacancy_resumes_skill', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resumes_id')->constrained('resumes');
            $table->foreignId('skills_id')->constrained('skills');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacancy_resumes_skill');
    }
};
