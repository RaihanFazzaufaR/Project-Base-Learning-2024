<?php

namespace App\Http\Controllers;

use App\Models\LevelDetailModel;
use App\Models\UserAccountModel;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
                return redirect('/');
            }
        }
        return view('Login.index');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required|min:5'
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
                return redirect()->intended('/');
            }
        }

        return back()->with('loginError', 'Login Gagal! Silahkan cek kembali username dan password Anda.');
    }

    public function forgotPassword()
    {
        return view('Login.forgot_password');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email'
        ]);

        $user = UserAccountModel::get(['username','email'])->where('username', $request->username)->where('email', $request->email);

        if($user->count() == 0){
            return back()->withErrors(['errors' => 'Username or email not found!']);
        }

        $status = Password::sendResetLink($request->only('email'));

        return $status === Password::RESET_LINK_SENT
            ? back()->with('status', 'Link reset telah terkirim ke email!')
            : back()->withErrors(['errors' => 'Invalid Email!']);
    }

    public function changePassword()
    {
        return view('Login.change_password');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:5|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            
            function($user, $password){
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status == Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', 'Password berhasil diubah!')
            : back()->withErrors(['errors' => [__($status)]]);
    }

    public function logout(Request $request)
    {
        $request->session()->flush();

        Auth::logout();

        return redirect('/');
    }
}
