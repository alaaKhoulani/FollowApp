<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher_Delay extends Model
{
    use HasFactory;

    protected $fillable = [
        'year_id',
        'employee_id',
        'class_id',
        'section_id',
        'date',
        'delay_type',
        'session',
        'period_delay',
        'supervisor_notes',
        'created_by',
        'updated_by',
    ];

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function class()
    {
        return $this->belongsTo(Class_::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
