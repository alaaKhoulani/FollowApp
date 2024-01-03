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
        Schema::create('supervisor_notes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('year_id')->constrained('years');
            $table->foreignId('employee_id')->constrained('employees');
            $table->foreignId('supervisor_note_type_id')->constrained('supervisor_note_types');
            $table->date('date')->nullable();
            $table->string('note')->nullable();
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
        Schema::dropIfExists('supervisor_notes');
    }
};
