<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class RprofileController extends Controller
{
    // GET "frontpage" of this controller.
    public function index(){
        return view('register.rprofile');
    }
    public function index2(){
        return view('register.opretprofile');
    }

    function firstpt(Request $request){
        $data = $request->input();
        $request->session()->put('email', $data['email']);
        $request->session()->put('password', Hash::make($data['password']));

        return redirect('/rprofile');
    }

    protected function create(Request $data)
    {
        $user = User::create([
             'firstname' => $data['firstname'],
            'surname' => $data['surname'],
            'email'=> $data['email'],
            'password' => Hash::make($data['password']),
            'birthdate' => $data['birthdate'],
            'gender' => $data['gender'],
            'photo' => $data['photo'],
            'telephone' => $data['telephone'],
        ]);
        Auth::login($user);
        return redirect('/dashboard');
    }

    
    

}
