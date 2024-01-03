<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $fillable = [
        'year_id',
        'class_id',
        'name',
        'maximum_number',
        'created_by',
        'updated_by',
    ];

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function class()
    {
        return $this->belongsTo(Class_::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function userSection()
    {
        return $this->hasMany(User_Section::class);
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
