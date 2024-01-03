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
        Schema::create('employee_absences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('year_id')->constrained('years');
            $table->foreignId('employee_id')->constrained('employees');
            $table->date('date')->nullable();
            $table->string('vacation_type')->nullable();
            $table->string('absence_type')->nullable();
            $table->string('justification_type')->nullable();
            $table->string('reason')->nullable();
            $table->string('note')->nullable();
            $table->string('from_hour')->nullable();
            $table->string('to_hour')->nullable();
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
        Schema::dropIfExists('employee_absences');
    }
};
