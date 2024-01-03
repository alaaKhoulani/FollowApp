<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisor_Note_Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'year_id',
        'type',
        'created_by',
        'updated_by',
    ];

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function supervisorNotes()
    {
        return $this->hasMany(Supervisor_Note::class);
    }
}
