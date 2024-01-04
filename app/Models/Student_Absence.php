<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_Absence extends Model
{
    use HasFactory;
    protected $fillable = [
        'year_id',
        'student_id',
        'reason',
        'date_of_absence',
        'type_of_absence',
        'created_by',
        'updated_by',
    ];

    public function year()
    {
        return $this->belongsTo(Year::class);
    }
    public function Students()
    {
        return $this->belongsTo(Student::class);
    }


}
