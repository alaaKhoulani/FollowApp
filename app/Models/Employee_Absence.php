<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee_Absence extends Model
{
    use HasFactory;

    protected $fillable = [
        'year_id',
        'employee_id',
        'date',
        'vacation_type',
        'absence_type',
        'justification_type',
        'reason',
        'note',
        'from_hour',
        'to_hour',
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
}
