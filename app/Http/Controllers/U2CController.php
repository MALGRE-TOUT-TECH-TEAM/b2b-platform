<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\U2C;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class U2CController extends Controller
{
    public function get(){
        $categories = Categories::all();
        return view('register.category', compact('categories'));
    
    }

    protected function create( Request $data ){
        $user = Auth::id();
        $id = 1;
        

        U2C::create([
            'user_id' => $data([$user]),
            'category_id' => $data([1]) ,       
        ]);

        return redirect(route('home'));



    }
}
