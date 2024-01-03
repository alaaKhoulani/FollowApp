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
        Schema::create('expected_num_hours', function (Blueprint $table) {
            $table->id();
            $table->foreignId('year_id')->constrained('years');
            $table->foreignId('employee_id')->constrained('employees');
            $table->integer('m1_num')->nullable();
            $table->integer('m2_num')->nullable();
            $table->integer('m3_num')->nullable();
            $table->integer('m4_num')->nullable();
            $table->integer('m5_num')->nullable();
            $table->integer('m6_num')->nullable();
            $table->integer('m7_num')->nullable();
            $table->integer('m8_num')->nullable();
            $table->integer('m9_num')->nullable();
            $table->integer('m10_num')->nullable();
            $table->integer('m11_num')->nullable();
            $table->integer('m12_num')->nullable();
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
        Schema::dropIfExists('expected_num_hours');
    }
};
