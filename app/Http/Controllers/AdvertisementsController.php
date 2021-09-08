<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvertisementsController extends Controller
{
    // GET "frontpage" of this controller.
    public function index(){
        return view('advertisements.index');
    }
}
