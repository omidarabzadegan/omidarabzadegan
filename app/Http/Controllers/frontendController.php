<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class frontendController extends Controller
{
    function front()
    {
        $user = User::find(1);
        $experiences = Experience::all();
        return view('index' , compact('user' , 'experiences'));
    }
}
