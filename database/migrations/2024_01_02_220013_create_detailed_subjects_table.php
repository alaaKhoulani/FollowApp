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
        Schema::create('detailed_subjects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('year_id')->constrained('years');
            $table->foreignId('subject_id')->constrained('subjects');
            $table->string('name')->nullable();
            $table->integer('maximum_mark')->nullable();
            $table->integer('minimum_mark')->nullable();
            $table->boolean('has_mark_parts')->nullable();
            $table->integer('mark_of_semester1')->nullable();
            $table->integer('mark_of_semester2')->nullable();
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
        Schema::dropIfExists('detailed_subjects');
    }
};
