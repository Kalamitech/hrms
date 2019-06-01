<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainingInvite extends Model
{
    public function program()
    {
        return $this->hasOne('App\TrainingProgram', 'id', 'program_id');
    }

    public function employee()
    {
        return $this->belongsTo('App\Employee', 'user_id', 'user_id');
    }

}
