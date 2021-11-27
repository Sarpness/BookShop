<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserProfileController extends Controller
{
    public function profile()
    {
        return view('user');
    }

    public function editProfile(Request $req){
        $user = User::where('id', Auth::user()->id)->first();
        $user->name = $req->input('name');
        $user->email = $req->input('email');
        $user->save();

        return redirect()->route('profile');
    }
}
