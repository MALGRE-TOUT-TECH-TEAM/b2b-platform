<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(){
        return view('login.login');
    }

    public function clogin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials=$request->only('email', 'password');
        if(Auth::attempt($credentials)){
            redirect()->intended('/dashboard')
               ->withSuccess('Signed in');
        }
        return redirect("/opretprofile")->withSuccess('Login details are not valid');
    }

    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login.login');
    }
}
