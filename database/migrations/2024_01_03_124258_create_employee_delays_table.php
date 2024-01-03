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
        Schema::create('employee_delays', function (Blueprint $table) {
            $table->id();
            $table->foreignId('year_id')->constrained('years');
            $table->foreignId('employee_id')->constrained('employees');
            $table->date('date')->nullable();
            $table->double('period_delay')->nullable();
            $table->boolean('type')->nullable();
            $table->string('supervisor_notes')->nullable();
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
        Schema::dropIfExists('employee_delays');
    }
};
