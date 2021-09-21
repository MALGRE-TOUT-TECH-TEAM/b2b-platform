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
        // $request->session()->put('password', $request->input('password'));

        return redirect('/rprofile');
    }

    protected function create(Request $data)
    {
        $data->validate(
            [
                "email" => "bail|required|email|unique:users,email|min:5|max:191",
                "password" => "required|min:8",
                "firstname" => "required|min:2",
                "surname" => "required",
                "birthdate" => "required|date|before:today",
                "gender" => "required",
                "telephone" => "required|min:8|max:20",
            ],
            [
                "password.required" => "Du er nød til at tilføje et password",
                "password.min" => "Dit kodeord skal har minimum 8 tegn",
                "firstname.required" => "Du er nød til at tilføje et fornavn",
                "firstname.min" => "Dit fornavn skal har mindst 2 tegn",
                "surname.required" => "Du er nød til at tilføje et efternavn",
                "gender.required" => "Du er nød til at tilføje et køn",
                "photo.required" => "Du er nød til at tilføje et billede",
                "telephone.required" => "Du er nød til at tilføje et telefon-nummer",
                "telephone.min" => "Telefon nummer skal mindst være 8 tal",
                "email.required" => "Du er nød til at tilføje en email",
                "email.email" => "Det skal være en email",
                "email.unique" => "Din email eksitere allerede",
                "email.min" => "Email skal minimum har 5 tegn",
                "email.max" => "Du har brugt for mange tegn",
                "birthdate.required" => "Du er nød til at tilføje en fødseldag",
                "birthdate.date" => "Det skal være en dato",
                "birthdate.before" => "Du kan ikke sætte en dato der ligger i fremtiden",

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
