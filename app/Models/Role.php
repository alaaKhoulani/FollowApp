<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'year_id',
        'name',
        'created_by',
        'updated_by',
    ];

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function userRoles()
    {
        return $this->hasMany(User_Role::class);
    }

    public function rolePermissions()
    {
        return $this->hasMany(Role_Permission::class);
    }
}
