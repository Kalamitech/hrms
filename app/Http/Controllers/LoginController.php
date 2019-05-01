<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Spatie\Activitylog\Contracts\Activity;

class LoginController extends Controller
{
    public function login(Request $request){
        // dd($request->all());

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            //select user details
            $user = User::where('email', $request->email)->first();
            

            //check if user is a system administrator
            if ($user->isAdmin()) {

                //Log activity
                activity()
                ->causedBy($user)
                ->tap(function(Activity $activity) {
                    $activity->subject_type = 'System';
                    $activity->subject_id = '0';
                    $activity->log_name = 'User Login';
                 })
                ->log($user->email. ' logged in as a System Administrator');

                //redirect to admin portal
                return redirect()->route('admin');

            }elseif($user->isManager()){

                //Log activity
                activity()
                ->causedBy($user)
                ->tap(function(Activity $activity) {
                    $activity->subject_type = 'System';
                    $activity->subject_id = '0';
                    $activity->log_name = 'User Login';
                 })
                ->log($user->email. ' logged in as a Manager');

                //redirect to manager portal
                return redirect()->route('manager');
            
            }elseif($user->isGEmployee()){

                //Log activity
                activity()
                ->causedBy($user)
                ->tap(function(Activity $activity) {
                    $activity->subject_type = 'System';
                    $activity->subject_id = '0';
                    $activity->log_name = 'User Login';
                 })
                ->log($user->email. ' logged in as an General Employee');

                //redirect to employee portal
                return redirect()->route('home');
            }
        }else{
            //Log activity - Unsuccessful login attempt
            activity()
            ->tap(function(Activity $activity) {
                $activity->subject_type = 'System';
                $activity->subject_id = '0';
                $activity->log_name = 'User Login';
             })
            ->log($request->email. ' login attempt failed');

            //return back with error message if login is unsuccessful
            return redirect()->back()->with('error', 'Invalid login credentials entered.');
        }
    }

    //supposed to overwrite loggedOut Method
    // protected function loggedOut(Request $request) {
    //     return redirect('/');
    // }
}
