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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('GUID');
            $table->string('username');
            $table->string('password');
            $table->foreignId('year_id')->constrained('years');
            $table->foreignId('class_id')->constrained('classes');
            $table->foreignId('section_id')->constrained('sections');
            $table->foreignId('region_id')->constrained('regions');
            $table->foreignId('discount_id')->constrained('discounts');
            $table->foreignId('trip_id')->constrained('trips');
            $table->string('full_name');
            $table->string('place_of_birth');
            $table->string('gender');
            $table->date('birth_date');
            $table->string('nationalit');
            $table->string('place_number_of_registration');
            $table->string('grandfather_name');
            $table->string('address');
            $table->string('phone_num');
            $table->string('landline_phone');
            $table->string('father_name');
            $table->string('father\'s_academic_certificate');
            $table->string('father\'s_job');
            $table->string('father\'s_work_phone');
            $table->string('father\'s_mobile_phone');
            $table->string('father\'s_situation');
            $table->string('mother_name');
            $table->string('mother\'s_academic_certificate');
            $table->string('mother\'s_job');
            $table->string('mother\'s_work_phone');
            $table->string('mother\'s_mobile_phone');
            $table->string('mother\'s_situation');
            $table->string('parental_status');
            $table->string('number_of_male_siblings');
            $table->string('number_of_female_siblings');
            $table->string('financial_situation');
            $table->boolean('status');
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
        Schema::dropIfExists('students');
    }
};