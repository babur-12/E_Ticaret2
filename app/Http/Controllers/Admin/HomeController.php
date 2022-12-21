<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        return view('Admin.index');
    }
    public function login()
    {
        return view('Admin.login');
    }
    public function register(Request $request)
    {
        return view('Admin.register');
    }
    public function registercheck(Request $request)
    {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
            return view('Admin.login');
    }
    public function logincheck(Request $request)
    {
        if ($request->isMethod('post'))
        {
            $credentials = $request->only('email','password');
            if (Auth::attempt($credentials)){
                $request->session()->regenerate();
                return redirect()->route('admin');
            }

            return  back()->withErrors([
                'email' => 'The provided credentials do not match our records.'
            ]);
        }
        else
        {
            return view('Admin.login');
        }
    }
}
