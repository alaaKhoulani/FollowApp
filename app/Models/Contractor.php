<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contractor extends Model
{
    use HasFactory;
    protected $fillable = [
        'year_id',
        'name',
        'phone_num1',
        'phone_num2',
        'created_by',
        'updated_by',
    ];

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    
    public function Contractor_Payments()
    {
        return $this->hasMany(Contractor_Payment::class);
    }
    public function Buses()
    {
        return $this->hasMany(Bus::class);
    }

}
