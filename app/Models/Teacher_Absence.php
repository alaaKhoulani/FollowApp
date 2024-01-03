<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher_Absence extends Model
{
    use HasFactory;

    protected $fillable = [
        'year_id',
        'absence_emp_id',
        'alternative_emp_id',
        'class_id',
        'section_id',
        'date',
        'type',
        'session',
        'supervisor_notes',
        'manager_notes',
        'created_by',
        'updated_by',
    ];

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function absenceEmployee()
    {
        return $this->belongsTo(Employee::class, 'absence_emp_id', 'id');

    }

    public function alternativeEmployee()
    {
        return $this->belongsTo(Employee::class, 'alternative_emp_id', 'id');
    }

    public function class()
    {
        return $this->belongsTo(Class_::class);
    }

    public function section()
    {
        return $this->belongsTo(section::class);
    }
}
