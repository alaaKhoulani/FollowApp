<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisor_Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'year_id',
        'employee_id',
        'supervisor_note_type_id',
        'date',
        'note',
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

    public function supervisorNoteType()
    {
        return $this->belongsTo(Supervisor_Note::class);
    }
}
