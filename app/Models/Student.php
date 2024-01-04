<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'year_id',
        'class_id',
        'section_id',
        'region_id',
        'discount_id',
        'trip_id',
        'GUID',
        'username',
        'password',
        'full_name',
        'place_of_birth',
        'gender',
        'birth_date',
        'nationality',
        'place_number_of_registration',
        'grandfather_name',
        'address',
        'phone_num',
        'landline_phone',
        'father_name',
        'father\'s_academic_certificate',
        'father\'s_job',
        'father\'s_work_phone',
        'father\'s_mobile_phone',
        'father\'s_situation',
        'mother_name',
        'mother\'s_academic_certificate',
        'mother\'s_job',
        'mother\'s_work_phone',
        'mother\'s_mobile_phone',
        'mother\'s_situation',
        'parental_status',
        'number_of_male_siblings',
        'number_of_female_siblings',
        'financial_situation',
        'status',
    ];


    public function marks()
    {
        return $this->hasMany(Mark_Part::class);
    }

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function class()
    {
        return $this->belongsTo(Class_::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function discount()
    {
        return $this->belongsTo(Discount::class);
    }

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }

    public function revenues()
    {
        return $this->hasMany(Revenue::class);
    }

    public function StudentOralTests()
    {
        return $this->hasMany(Student_Oral_Test::class);
    }

    public function Student_Exams()
    {
        return $this->hasMany(Student_Exam::class);
    }
    public function Student_Absences()
    {
        return $this->hasMany(Student_Absence::class);
    }
    public function student_Letness()
    {
        return $this->hasMany(Student_Letness::class);
    }
    public function student_Behaviorals()
    {
        return $this->hasMany(student_Behavioral::class);
    }
}
