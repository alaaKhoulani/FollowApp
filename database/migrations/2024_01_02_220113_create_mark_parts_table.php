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
            $table->foreignId('detailed_subject_id')->constrained('detailed_subjects');
            $table->integer('oral_degree1');
            $table->integer('revision1');
            $table->integer('homework1');
            $table->integer('activities1');
            $table->integer('exam1');
            $table->integer('total1');
            $table->integer('oral_degree2');
            $table->integer('revision2');
            $table->integer('homework2');
            $table->integer('activities2');
            $table->integer('exam2');
            $table->integer('total2');

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
        Schema::dropIfExists('mark_parts');
    }
};