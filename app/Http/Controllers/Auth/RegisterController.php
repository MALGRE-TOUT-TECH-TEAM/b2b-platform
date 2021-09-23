<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request as HttpRequest;
use App\Http\Controllers\Auth\Input;
use Dflydev\DotAccessData\Data;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = "/categories";
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make(
            $data,
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
                "password.min" => "Dit kodeord skal have minimum 8 tegn",
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
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'firstname' => $data['firstname'],
            'surname' => $data['surname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'birthdate' => $data['birthdate'],
            'gender' => $data['gender'],
            'photo' => $data['photo'] ?? null,
            'telephone' => $data['telephone'],
        ]);

        $email_data = array(
            'name' => $data['firstname'],
            'email'=> $data['email'],
            'totalusers' => User::all()->count(),
        );

        Mail::send('welcome_email', $email_data, function($message) use ($email_data){
            $message->to($email_data['email'], $email_data['name'])
            ->subject('Welcome to B2B-Platform')
            ->from('no-reply@myemail.com', 'B2B-platform');
        });

        Mail::send('newuser_email', $email_data, function($message) use ($email_data){
            $message->to('bencurovic@gmail.com')
            ->subject('NEW USER!!!!')
            ->from('no-reply@myemail.com', 'B2B-platform');
        });

        return $user;

    }
}
