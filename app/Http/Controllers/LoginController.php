<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function login()
    {
        return view('public.login.desktop');
    }

    public function login_post(){
        dd('Bienvenido al Panel de control');
    }
}
