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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('year_id')->constrained('years');
            $table->foreignId('position_id')->constrained('positions');
            $table->string('name')->nullable();
            $table->string('phone_num')->nullable();
            $table->string('mobile_num')->nullable();
            $table->string('address')->nullable();
            $table->string('type')->nullable();
            $table->string('salary')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('social_state')->nullable();
            $table->string('health_state')->nullable();
            $table->string('note')->nullable();
            $table->date('start_job')->nullable();
            $table->date('exit_job')->nullable();
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
        Schema::dropIfExists('employees');
    }
};
