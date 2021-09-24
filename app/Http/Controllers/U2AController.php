<?php

namespace App\Http\Controllers;

use App\Models\Audience;
use App\Models\U2A;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class U2AController extends Controller
{
    public function index()
    {
        $audiences = Audience::all();
        return view('audiences.index', compact('audiences'));
    }
    public function create(Request $data)
    {
        $audiences = $data->get("audiences");
        $data->validate([
            "audiences" => "required"
        ]);

        foreach ($audiences as $id) {

            U2A::create([
                'user_id' => Auth::id(),
                'audience_id' => $id,
            ]);
        }
        return redirect('/dashboard');
    }
}
