<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;


    protected $fillable = [
        'year_id',
        'discount_value',
        'notes',
        'created_by',
        'updated_by',
    ];

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function students()
    {
        return $this->belongsTo(Student::class);
    }
}
