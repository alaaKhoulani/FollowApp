
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
            $table->foreignId('year_id')->constrained('years');
            $table->foreignId('class_id')->constrained('classes');
            $table->foreignId('section_id')->constrained('sections');
            $table->foreignId('region_id')->constrained('regions');
            $table->foreignId('discount_id')->constrained('discounts');
           $table->foreignId('trip_id')->constrained('trips');
            $table->integer('GUID')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('full_name')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('gender')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('nationality')->nullable();
            $table->string('place_number_of_registration')->nullable();
            $table->string('grandfather_name')->nullable();
            $table->string('address')->nullable();
            $table->string('phone_num')->nullable();
            $table->string('landline_phone')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father\'s_academic_certificate')->nullable();
            $table->string('father\'s_job')->nullable();
            $table->string('father\'s_work_phone')->nullable();
            $table->string('father\'s_mobile_phone')->nullable();
            $table->string('father\'s_situation')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother\'s_academic_certificate')->nullable();
            $table->string('mother\'s_job')->nullable();
            $table->string('mother\'s_work_phone')->nullable();
            $table->string('mother\'s_mobile_phone')->nullable();
            $table->string('mother\'s_situation')->nullable();
            $table->string('parental_status')->nullable();
            $table->string('number_of_male_siblings')->nullable();
            $table->string('number_of_female_siblings')->nullable();
            $table->string('financial_situation')->nullable();
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
        Schema::dropIfExists('students');
    }
};
