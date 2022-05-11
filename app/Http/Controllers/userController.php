<?php

namespace App\Http\Controllers;

use App\Models\specification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\CssSelector\Node\Specificity;

class userController extends Controller
{
    function edit()
    {
        $user = User::all();
        $user = $user[0];
        return view('admin.project.create' , compact('user'));
    }
    function update(Request $request, $user_id)
    {
        $user = User::findorfail($user_id);
        $specificationUpdate = specification::find($user->specification->id);
            $updateUser = $user->update([
                'name' => $request['name'],
                'email' => $request['email'],
            ]);
            $specificationUpdate->update([
                'phone' => $request['phone'],
                'perfetion' => $request['perfetion'],
                'about' => $request['about'],
            ]);
            if (!$updateUser) {
                return back()->with('feiled' , 'Error');
            }else
            {
                return back()->with('success' , 'submit successful');
            }
    }
}
