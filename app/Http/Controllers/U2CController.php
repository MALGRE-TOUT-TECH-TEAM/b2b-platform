<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\U2C;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class U2CController extends Controller
{
    public function index()
    {
        $types = Categories::all();
        return view('categories.index')->with('categories', $types);
    }

    public function create(Request $data)
    {
        $categories = $data->get("categories");


        foreach ($categories as $id) {

            U2C::create([
                'user_id' => Auth::id(),
                'category_id' => $id,

            ]);
        }

        return redirect('/raudience');
    }
}
