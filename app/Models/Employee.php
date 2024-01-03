<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'year_id',
        'position_id',
        'name',
        'phone_num',
        'mobile_num',
        'address',
        'type',
        'salary',
        'birth_date',
        'social_state',
        'health_state',
        'note',
        'start_job',
        'exit_job',
        'created_by',
        'updated_by',
    ];

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function discountEmployees()
    {
        return $this->hasMany(Discount_Employee::class);
    }

    public function Expected_Num_Hours()
    {
        return $this->hasMany(Expected_Num_Hours::class);
    }

    public function bonuses()
    {
        return $this->hasMany(Bonuses::class);
    }

    public function supervisorNotes()
    {
        return $this->hasMany(Supervisor_Note::class);
    }

    public function Teacher_Delays()
    {
        return $this->hasMany(Teacher_Delay::class);
    }

    public function Teacher_Absence()
    {
        return $this->hasMany(Teacher_Absence::class);
    }

    public function EmployeeDelays()
    {
        return $this->hasMany(Employee_Delay::class);
    }

    public function EmployeeAbsences()
    {
        return $this->hasMany(Employee_Absence::class);
    }

    public function EmployeePayments()
    {
        return $this->hasMany(Employee_Payment::class);
    }
}
