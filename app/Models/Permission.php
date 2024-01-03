<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'create_by',
        'updated_by',
    ];

    public function rolePermissions()
    {
        return $this->hasMany(Role_Permission::class);
    }
}
