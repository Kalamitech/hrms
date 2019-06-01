<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function login(){
        return view('login.index');
    }

    public function adminIndex(){
        return view('admin.index');
    }

    public function managerIndex(){
        return view('manager.index');
    }

    public function homeIndex(){
        return view('home.index');
    }

    public function adminChangePassword()
    {
        return view('admin.change-password');
    }

    public function adminShowCompanyPolicy()
    {
        return view('admin.company-policy');
    }

    
}
