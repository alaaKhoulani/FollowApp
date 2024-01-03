<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount_Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'year_id',
        'employee_id',
        'amount',
        'notes',
        'year',
        'month',
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
