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
        $data = $request->input();
        $request->session()->put('email', $data['email']);
        $request->session()->put('password', $data['password']);

        return redirect('/rprofile');
    }

    protected function create(CreateUser $data)
    {
        // $user = User::create([
        //     'firstname' => $data['firstname'],
        //     'surname' => $data['surname'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        //     'birthdate' => $data['birthdate'],
        //     'gender' => $data['gender'],
        //     'photo' => $data['photo'],
        //     'telephone' => $data['telephone'],
        // ]);

        $validatedUser = $data->validated();
        $user = User::create($validatedUser);
        if (Auth::attempt($user)) {
            return redirect('/rcategory');
        }
    }
}
