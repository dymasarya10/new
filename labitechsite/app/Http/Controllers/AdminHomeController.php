<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminHomeController extends Controller
{
    public function index()
    {
        return view('admin.homeadmin',[
            'heading' => 'Selamat Bekerja'
        ]);
    }

    public function indexlogin()
    {
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/admlab');
        }

        return back()->with('loginError','Login Failed');
    }
}
