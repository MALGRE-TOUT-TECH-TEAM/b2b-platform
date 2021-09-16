<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class U2CController extends Controller
{
    public function get(){
        $types = Categories::all();
        return view('register.category')->with('categories', $types);
    
    }
}
