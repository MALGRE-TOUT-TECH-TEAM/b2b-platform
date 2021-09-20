<?php

namespace App\Http\Controllers;

use App\Models\Audience;
use App\Models\U2A;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class U2AController extends Controller
{
    public function get()
    {
        $audiences = Audience::all();
        return view('register.audience', compact('audiences'));
    }
    public function create(Request $data)
    {
        $audiences = $data->get("audiences");

        
        foreach ($audiences as $id) {

            U2A::create([
                'user_id' => Auth::id(),
                'audience_id' => $id,
            ]);
        }
        return redirect('/dashboard');

    }
}
