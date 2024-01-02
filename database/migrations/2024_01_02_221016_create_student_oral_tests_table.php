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
            $table->string('rate');
            $table->string('max_rate');
            $table->boolean('is_seen');
            $table->boolean('is_wait');
            $table->integer('deserved_mark');
            $table->date('date');
            $table->string('created_by');
            $table->string('updated_by');
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