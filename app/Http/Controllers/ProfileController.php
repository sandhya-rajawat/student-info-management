<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('user-profile', compact('user'));
    }


    public function update(ProfileRequest $rst)
    {
        $user = Auth::user();

        $user->name = $rst->name;
        $user->email = $rst->email;

        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }
}
