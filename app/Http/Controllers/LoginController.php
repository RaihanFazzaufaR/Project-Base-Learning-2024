<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('Login.index');
    }

    public function forgotPassword()
    {
        return view('Login.forgot_password');
    }

    public function recoveryCode()
    {
        return view('Login.recovery_code');
    }

    public function changePassword()
    {
        return view('Login.change_password');
    }
}
