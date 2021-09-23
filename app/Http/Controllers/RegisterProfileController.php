<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterProfileController extends Controller
{
    // GET "frontpage" of this controller.
    public function index()
    {
        if (auth()->user()) {
            return redirect(route('/'));
        } else {
            return view('auth.registerprofile');
        }
    }


    function saveEmail(Request $request)
    {

        $request->validate(
            [
                "email" => "bail|required|email|unique:users,email|min:5|max:191",
            ],
            [
                "email.unique" => "Der er allerede registreret en bruger med denne email.",
                "email.min" => "Email skal mindst have 5 bogstaver."
            ]
        );
        $request->session()->put('email', $request->input('email'));
        // $request->session()->put('password', $request->input('password'));

        return redirect('/register');
    }
}
