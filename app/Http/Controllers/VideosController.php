<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideosController extends Controller
{
    // GET "frontpage" of this controller.
    public function index(){
        return view('videos.index');
    }
}
