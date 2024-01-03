<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'year_id',
        'class_id',
        'name',
        'maximum_mark',
        'minimum_mark',
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

    public function detailed()
    {
        return $this->hasMany(Detailed_Subject::class);
    }
}
