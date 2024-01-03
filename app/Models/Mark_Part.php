<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark_Part extends Model
{
    use HasFactory;

    protected $fillable = [
        'year_id',
        'student_id',
        'detailed_subject_id',
        'oral_degree1',
        'revision1',
        'homework1',
        'activities1',
        'exam1',
        'total1',
        'oral_degree2',
        'revision2',
        'homework2',
        'activities2',
        'exam2',
        'total2',
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
