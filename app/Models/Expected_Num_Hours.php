<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expected_Num_Hours extends Model
{
    use HasFactory;

    protected $fillable = [
        'year_id',
        'employee_id',
        'm1_num',
        'm2_num',
        'm3_num',
        'm4_num',
        'm5_num',
        'm6_num',
        'm7_num',
        'm8_num',
        'm9_num',
        'm10_num',
        'm11_num',
        'm12_num',
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
