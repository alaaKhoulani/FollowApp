<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;


    protected $fillable = [
        'year_id',
        'name',
        'created_by',
        'updated_by',
    ];

    public function year(){
        return $this->belongsTo(Year::class);
    }

    public function employees(){
        return $this->hasMany(Employee::class);
    }
}
