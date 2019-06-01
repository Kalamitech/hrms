<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    public function leaveType()
    {
        return $this->hasOne('App\LeaveType', 'id', 'leave_type_id');
    }

    public function employee()
    {
        return $this->belongsTo('App\Employee', 'user_id', 'user_id');
    }

}
