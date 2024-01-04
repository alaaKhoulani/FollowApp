<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Additional_Revenue extends Model
{
    use HasFactory;
    protected $fillable = [
        'year_id',
        'name',
        'amount',
        'date_of_receipt',
        'description',
        'created_by',
        'updated_by',
    ];

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

}
