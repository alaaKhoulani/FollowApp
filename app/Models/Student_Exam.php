<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_Exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'year_id',
        'student_id',
        'detailed_subject_id',
        'type',
        'deserved_mark',
        'created_by',
        'updated_by',
    ];

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function detailed()
    {
        return $this->belongsTo(Detailed_Subject::class);
    }
}
