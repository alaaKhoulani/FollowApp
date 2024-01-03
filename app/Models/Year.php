<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'name',
        'first_year',
        'second_year',
        'days_of_semester1',
        'days_of_semester2',
        'status',
        'created_by',
        'updated_by',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function classes()
    {
        return $this->hasMany(Class_::class);
    }

    public function sections()
    {
        return $this->hasMany(Section::class);
    }

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }

    public function detailed()
    {
        return $this->hasMany(Detailed_Subject::class);
    }

    public function marks()
    {
        return $this->hasMany(Mark_Part::class);
    }

    public function discounts()
    {
        return $this->hasMany(Discount::class);
    }

    public function regions()
    {
        return $this->hasMany(Region::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function roles()
    {
        return $this->hasMany(Role::class);
    }

    public function supervisorNoteTypes()
    {
        return $this->hasMany(Supervisor_Note_Type::class);
    }

    public function positions()
    {
        return $this->hasMany(Position::class);
    }

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    public function supervisorNotes()
    {
        return $this->hasMany(Supervisor_Note::class);
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
        return $this->hasMany(Employee_Delay::class);
    }

    public function EmployeePayments()
    {
        return $this->hasMany(Employee_Payment::class);
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


}
