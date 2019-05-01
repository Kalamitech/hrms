<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Contracts\Activity;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //get authenticated user
        $user = Auth::user();
        
        //check access level
        if ($user->access_level == 1) {
            return $next($request);
        }
        
        //Log fraudulent activity
        activity()
        ->causedBy($user)
        ->tap(function(Activity $activity) {
            $activity->subject_type = 'System';
            $activity->subject_id = '0';
            $activity->log_name = 'Unauthorized user access';
         })
        ->log($user->email. ' attempted to access a restricted route as a System Administrator');

        //return to login page if user doesn't have access
        //change this to non authorized access page
        return redirect()->route('loginIndex');
        
    }
}
