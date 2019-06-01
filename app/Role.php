<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = array('name','description');

    public function employee()
    {
        return $this->hasMany('App\Employee');
    }
}
