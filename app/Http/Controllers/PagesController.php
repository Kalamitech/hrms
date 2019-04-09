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

    public function homeIndex(){
        return view('home.index');
    }
}
