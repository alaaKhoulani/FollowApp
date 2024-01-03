<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revenue extends Model
{
    use HasFactory;

    protected $fillable = [

        'student_id',
        'year_id',
        'receipt_number',
        'payment_date',
        'amount',
        'note',
        'created_by',
        'updated_by',
    ];

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
