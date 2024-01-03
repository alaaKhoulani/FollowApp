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
        Schema::create('teacher_absences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('year_id')->constrained('years');
            $table->foreignId('absence_emp_id')->constrained('employees');
            $table->foreignId('alternative_emp_id')->constrained('employees');
            $table->foreignId('class_id')->constrained('classes');
            $table->foreignId('section_id')->constrained('sections');
            $table->date('date')->nullable();
            $table->boolean('type')->nullable();
            $table->string('session')->nullable();
            $table->string('supervisor_notes')->nullable();
            $table->string('manager_notes')->nullable();
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
        Schema::dropIfExists('teacher_absences');
    }
};
