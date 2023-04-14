<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class authController extends Controller
{
    public function login()
    {
        if(Auth::guard('user')->check()){
            return redirect()->route('index');
        }
        return view('auth.login');
    }

    public function loginPost(Request $request)
    {
        $validate = Validator::make($request->all(),  [
            'name'      => 'required',
            'username'  => 'required|min:4',
            'password'  => 'required|min:8',
        ], [
            'name.required'     => 'Masukkan Nama Anda',
            'username.required' => 'Masukan Username!',
    
            'password.required' => 'Password tidak boleh kosong!',
            'password.min' => 'Oops password terlalu pendek!',
        ]);

        if($validate->fails()){
            return redirect()->back()->withErrors($validate)->withInput();
        }else{
            if (Auth::guard('user')->attempt(['name' => $request->name, 'username' => $request->username, 'password' => $request->password])) {
                return redirect()->route('index');
            } else {
                return redirect()->back()->with('error', 'Maaf Ada Kesalahan Sistem');
            }
        }
    }

    public function register()
    {
        if(Auth::guard('user')->check()){
            return redirect()->route('index');
        }
        return view('auth.register');
    }

    public function registerPost(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name'      => 'required',
            'username'  => 'required|min:8',
            'password'  => 'required|min:8',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        } else {
            try {
                $save = user::create([
                    'name'      => $request->name,
                    'username'  => $request->username,
                    'password'  => bcrypt($request->password),
                ]);
                Auth::guard('user')->login($save);
                return redirect()->route('login')->with('success', 'Yay, your registry is success');
            } catch (\Throwable $th) {
                return redirect()->back()->with('error', 'Oops sorry database is busy, try again later!');
            }
        }
    }
    public function logout()
    {
        if(Auth::guard('user')->check()){
            Auth::guard('user')->logout();
            return redirect()->route('index');
        }
    }
}
