<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function role()
    {
        return $this->belongsTo('App\Role', 'role_id', 'id');
    }

    public function department()
    {
        return $this->belongsTo('App\Department', 'department_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function leaves()
    {
        return $this->hasMany('App\Leave', 'user_id', 'id');
    }


}
