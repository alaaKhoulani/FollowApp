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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->foreignId('year_id')->constrained('years');
            $table->foreignId('region_id')->constrained('regions');
            $table->foreignId('bus_id')->constrained('buses');
            $table->foreignId('employee_id')->constrained('employees');
            $table->string('gender')->nullable();
            $table->string('trip_name')->nullable();
            $table->double('student_cost')->nullable();
            $table->double('September_cost')->nullable();
            $table->double('October_cost')->nullable();
            $table->double('November_cost')->nullable();
            $table->double('December_cost')->nullable();
            $table->double('January_cost')->nullable();
            $table->double('Februray_cost')->nullable();
            $table->double('March_cost')->nullable();
            $table->double('April_cost')->nullable();
            $table->double('May_cost')->nullable();
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
        Schema::dropIfExists('trips');
    }
};
