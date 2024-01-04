<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $fillable = [
        'year_id',
        'region_id',
        'bus_id',
        'employee_id',
        'gender',
        'trip_name',
        'student_cost',
        'September_cost',
        'October_cost',
        'November_cost',
        'December_cost',
        'January',
        'February_cost',
        'March_cost',
        'April_cost',
        'May_cost',
        'created_by',
        'updated_by',
    ];

    public function year()
    {
        return $this->belongsTo(Year::class);
    }
    public function Regions()
    {
        return $this->belongsTo(Region::class);
    }
    public function Buses()
    {
        return $this->belongsTo(Bus::class);
    }
    public function Employees()
    {
        return $this->belongsTo(Employee::class);
    }


    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
