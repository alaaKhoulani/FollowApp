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
        Schema::create('years', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id')->constrained('admins');
            $table->string('name')->nullable();
            $table->integer('first_year')->nullable();
            $table->integer('second_year')->nullable();
            $table->integer('days_of_semester1')->nullable();
            $table->integer('days_of_semester2')->nullable();
            $table->date('start_of_semester1')->nullable();
            $table->date('end_of_semester1')->nullable();
            $table->date('start_of_semester2')->nullable();
            $table->date('end_of_semester2')->nullable();
            $table->boolean('status')->nullable();
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
        Schema::dropIfExists('years');
    }
};
