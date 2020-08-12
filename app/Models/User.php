<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{   
    protected $fillable = [
        'name', 'email'
    ];
    public function roles()
    {
        return $this->belongsToMany('App\Models\Role', 'role_user', 'user_id', 'role_id');
    }
}
