<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampaignsController extends Controller
{
    // GET "frontpage" of this controller.
    public function index(){
        return view('campaigns.index');
    }
}
