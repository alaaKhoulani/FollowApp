<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contractor_Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'year_id',
        'contractor_id',
        'receipt_number',
        'payment_date',
        'description',
        'amount',
        'created_by',
        'updated_by',
    ];

    public function contractor()
    {
        return $this->belongsTo(Contractor::class);
    }
    public function year()
    {
        return $this->belongsTo(Year::class);
    }
}
