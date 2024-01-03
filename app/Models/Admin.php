<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'username',
        'password',
        'school_name',
        'created_by',
        'updated_by',
    ];


    public function years()
    {
        return $this->hasMany(Year::class);
    }
}
