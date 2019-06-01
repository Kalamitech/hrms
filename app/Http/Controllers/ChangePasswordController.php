<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Spatie\Activitylog\Contracts\Activity;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ChangePasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    // use ResetsPasswords;


    
    public function adminChangePassword()
    {
        return view('admin.change-password');
    }

    public function processPasswordChange(Request $request)
    {
        $password = $request->old;
        $user     = User::where('id', \Auth::user()->id)->first();


        if (Hash::check($password, $user->password)) {
            $user->password = bcrypt($request->new);
            $user->save();
            \Auth::logout();

            //Log activity
            activity()
            ->causedBy($user)
            ->tap(function(Activity $activity) {
                $activity->subject_type = 'System';
                $activity->subject_id = '0';
                $activity->log_name = 'User Login';
             })
            ->log($user->email. ' changed their password successfully.');

            return redirect()->to('/')->with('message', 'Password updated! Re-login with updated password.');

        } else {
            \Session::flash('flash_message', 'Invalid password entered');

            return redirect()->back();
        }
    }
}
