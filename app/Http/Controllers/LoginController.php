<?php

namespace App\Http\Controllers;

use App\Models\LevelDetailModel;
use App\Models\UserAccountModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {   
        $user = Auth::user();

        if($user){
            if($user->level_id == 1){
                return redirect('/admin');
            }
            if($user->level_id == 2){
                return redirect('/home');
            }
        }
        return view('Login.index');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $request->session()->regenerate();

        $level_id = $request->level_id;

        if(Auth::attempt($credentials)){
            $user = Auth::user();
            
            $request->session()->regenerate();

            if($level_id == 1){
                return redirect()->intended('admin');
            }
            if($level_id == 2){
                return redirect()->intended('home');
            }
        }

        return back()->with('loginError', 'Login Gagal! Silahkan cek kembali username dan password Anda.');
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

    public function logout(Request $request)
    {
        $request->session()->flush();

        Auth::logout();

        return redirect('login');
    }
}
