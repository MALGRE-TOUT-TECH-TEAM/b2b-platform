<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUser;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class RprofileController extends Controller
{
    // GET "frontpage" of this controller.
    public function index()
    {
        if (auth()->user()) {
            return redirect(route('home'));
        } else {
            return view('register.rprofile');
        }
    }
    public function index2()
    {
        if (auth()->user()) {
            return redirect(route('home'));
        } else {
            return view('register.opretprofile');
        }
    }

    function firstpt(Request $request)
    {
        // $data = $request->input();
        // $validated = $request->validated();
        // dd($validated);
        $request->validate([
            "email" => "bail|required|email|unique:users,email|min:5|max:191",
            "password" => "required|min:8",
        ]);
        $request->session()->put('email', $request->input('email'));
        $request->session()->put('password', $request->input('password'));

        return redirect('/rprofile');
    }

    protected function create(Request $data)
    {
        $data->validate([
            "firstname" => "required|min:2",
            "surname" => "required",
            "birthdate" => "required|date|before:today",
            "gender" => "required",
            "photo" => "required",
            "telephone" => "required",
        ]);

        $user = User::create([
            'firstname' => $data['firstname'],
            'surname' => $data['surname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'birthdate' => $data['birthdate'],
            'gender' => $data['gender'],
            'photo' => $data['photo'],
            'telephone' => $data['telephone'],
        ]);

        Auth::login($user);
        return redirect('/rcategory');
    }
}
