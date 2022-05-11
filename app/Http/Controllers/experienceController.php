<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request as FacadesRequest;

class experienceController extends Controller
{
    function experience()
    {
        return view('admin.experience.create');
    }

    function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'title' => 'required',
            'year' => 'required',
            'company' => 'required',
            'about' => 'required|min:5',
        ]);
        $year = $validatedData['year'] . ' ' .'00:00:00';

        $data = Experience::create([
            'title' => $validatedData['title'],
            'year' => $year,
            'about' => $validatedData['about'],
            'company' => $validatedData['company'],
            'user_id' => Auth::user()->id,
        ]);
        if (!$data) {
            return back()->with('filed', 'Oobs Erorr');
        } else {
            return back()->with('success' , 'Experience is online');
        }
    }
}
