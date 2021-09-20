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
     
        $request->validate([
            "email" => "bail|required|email|unique:users,email|min:5|max:191",
        ]);
        $request->session()->put('email', $request->input('email'));
        $request->session()->put('password', $request->input('password'));

        return redirect('/rprofile');
    }

    protected function create(Request $data)
    {
        $data->validate([
            "email" => "bail|required|email|unique:users,email|min:5|max:191",
            "password" => "required|min:8",
            "firstname" => "required|min:2",
            "surname" => "required",
            "birthdate" => "required|date|before:today",
            "gender" => "required",
            "photo" => "required",
            "telephone" => "required",
        ],
        [
            "email.bail" => "",
            "email.required" => "Du er nød til at tilføje en email",
            "password.required" => "Du er nød til at tilføje et password",
            "firstname.required" => "Du er nød til at tilføje et fornavn",
            "surname.required" => "Du er nød til at tilføje et efternavn",
            "gender.required" => "Du er nød til at tilføje et køn",
            "photo.required" => "Du er nød til at tilføje et billede",
            "birthdate.required" => "Du er nød til at tilføje en fødseldag",
            "telephone.required" => "Du er nød til at tilføje et telefon-nummer",
            "email.email" =>"Det skal være en email",
            "email.unique:users,email" => "Din email eksitere allerede",
            "email.min:5"=> "Email skal minimum har 5 tegn",
            "email.max:191" => "Du har brugt for mange tegn",
            "password.min:8" => "Dit kodeord skal har minimum 8 tegn",
            "firstname.min:2" => "Dit fornavn skal har mindst 2 tegn",
            "birthdate.date" => "Det skal være en dato",
            "birthdate.before:today" => "Du kan ikke sætte en dato der ligger i fremtiden",
            
        ]
    );

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
