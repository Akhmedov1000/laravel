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
            $table->decimal('zarplata');
            $table->string('mestopolozheniye');
            $table->date('putification_date');
            $table->string('status');
            $table->integer('companies_id');
            $table->integer('application_id');
            $table->integer('application_resumes_id');
            $table->integer('application_vacancies_id');
        });


    }
};
