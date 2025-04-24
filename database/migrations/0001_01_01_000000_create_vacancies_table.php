<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->string('Job-tittle')->primary();
            $table->text('description');
            $table->string('requirements');
            $table->string('teams');
            $table->decimal('salary');
            $table->string('location')->nullable();
            $table->date('putification_date');
            $table->string('status');
            $table->integer('companies_id');
            $table->integer('application_id');
            $table->integer('application_resumes_id');
            $table->integer('application_vacancies_id');
        });


    }
};

