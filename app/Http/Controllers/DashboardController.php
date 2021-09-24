<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // GET "frontpage" of this controller.
    public function index(){
        return view('dashboard.index');
    }

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
}
