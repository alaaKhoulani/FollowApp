<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Class_ extends Model
{
    use HasFactory;

    protected $fillable = [
        'year_id',
        'name',
        'maximum_number',
        'annual_installment',
        'created_by',
        'updated_by',
    ];

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function sections()
    {
        return $this->hasMany(Section::class);
    }

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function Teacher_Delays()
    {
        return $this->hasMany(Teacher_Delay::class);
    }

    public function Teacher_Absence()
    {
        return $this->hasMany(Teacher_Absence::class);
    }
}
