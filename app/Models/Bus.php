<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;
    protected $fillable = [
        'contractor_id',
        'bus_name',
        'bus_number',
        'driver_number',
        'max_capacity',
        'created_by',
        'updated_by',
    ];

 public function contractor()
    {
        return $this->belongsTo(Contractor::class);
    }

    public function Trips()
    {
        return $this->hasMany(Trip::class);
    }

}
