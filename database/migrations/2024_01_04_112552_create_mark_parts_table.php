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
        Schema::create('mark_parts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('year_id')->constrained('years');
            $table->foreignId('student_id')->constrained('students');
            $table->foreignId('detailed_subject_id')->constrained('detailed_subjects');
            $table->integer('oral_degree1')->nullable();
            $table->integer('revision1')->nullable();
            $table->integer('homework1')->nullable();
            $table->integer('activities1')->nullable();
            $table->integer('exam1')->nullable();
            $table->integer('total1')->nullable();
            $table->integer('oral_degree2')->nullable();
            $table->integer('revision2')->nullable();
            $table->integer('homework2')->nullable();
            $table->integer('activities2')->nullable();
            $table->integer('exam2')->nullable();
            $table->integer('total2')->nullable();
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
        Schema::dropIfExists('mark_parts');
    }
};
