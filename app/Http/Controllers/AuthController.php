<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthenticatedRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticated(AuthenticatedRequest $request)
    {
        $validate = $request->validated();

        if ($validate) {
            if (Auth::attempt($validate)) {
                $request->session()->regenerate();
                $user = Auth::user();
                if ($user->status == 'aktif') {
                    //         $fullName = Auth::user()->full_name;
                    if($user->hasRole('admin')){
                        return redirect()->intended('/admin-page')->with('success', 'Selamat Datang!');
                    }
                    return redirect()->intended('/dashboard_user')->with('success', 'Selamat Datang!');
                } else {
                    Auth::logout();
                    return back()->with('error', 'Akun anda sudah tidak aktif ! Silahkan hubungi admin')->withInput();
                }
                // } else {
                //     dd('disisn');
                //     return redirect()->back()->with('error', 'Username dan password tidak sesuai')->withInput();
            } else {
                // alert()->error('Username dan password tidak sesuai!');
                return back()->with('error', 'Username dan password tidak sesuai')->withInput();
            }
        }
    }
}
