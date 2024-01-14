<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_oral_tests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('year_id')->constrained('years');
            $table->foreignId('student_id')->constrained('students');
            $table->foreignId('detailed_subject_id')->constrained('detailed_subjects');
            $table->string('rate')->nullable();
            $table->string('max_rate')->nullable();
            $table->boolean('is_seen')->nullable();
            $table->boolean('is_wait')->nullable();
            $table->integer('deserved_mark')->nullable();
            $table->date('date')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_oral_tests');
    }
};