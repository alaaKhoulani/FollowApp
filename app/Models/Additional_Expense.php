<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Additional_Expense extends Model
{
    use HasFactory;
    protected $fillable = [
        'year_id',
        'amount',
        'payment_date',
        'description',
        'created_by',
        'updated_by',
    ];

    public function year()
    {
        return $this->belongsTo(Year::class);
    }
}
