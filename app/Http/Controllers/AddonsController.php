<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddonsController extends Controller
{
    // GET "frontpage" of this controller.
    public function index(){
        return view('addons.index');
    }
}
