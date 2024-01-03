<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detailed_Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'year_id',
        'subject_id',
        'name',
        'type',
        'maximum_mark',
        'minimum_mark',
        'has_mark_parts',
        'mark_of_semester1',
        'mark_of_semester2',
        'created_by',
        'updated_by',
    ];

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function marks()
    {
        return $this->hasMany(Mark_Part::class);
    }

    public function StudentOralTests()
    {
        return $this->hasMany(Student_Oral_Test::class);
    }

    public function Student_Exams()
    {
        return $this->hasMany(Student_Exam::class);
    }
}
