<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function processPasswordChange(Request $request)
    {
        $password = $request->old;
        $user     = User::where('id', \Auth::user()->id)->first();


        if (Hash::check($password, $user->password)) {
            $user->password = bcrypt($request->new);
            $user->save();
            \Auth::logout();

            return redirect()->to('/')->with('message', 'Password updated! Re-login with updated password.');
        } else {
            \Session::flash('flash_message', 'Invalid password entered');

            return redirect()->back();
        }
    }
}
