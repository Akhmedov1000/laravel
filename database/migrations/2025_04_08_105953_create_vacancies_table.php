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
        Schema::create('cache', function (Blueprint $table) {
            $table->string('Job_tittle')->primary();
            $table->mediumText('description');
            $table->string('requirements');
            $table->string('teams');
            $table->decimal('salary');
            $table->string('location');
            $table->date('publication_date');
            $table->string('status');
            $table->foreignId('companies_id');
            $table->foreignId('application_id');
            $table->foreignId('application_resumes_id');
            $table->foreignId('application_vacancies_id');
        });


    }
};
