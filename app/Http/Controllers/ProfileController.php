<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        $user = auth::user();
        return view('user-profile', compact('user'));
    }

    public function update(ProfileRequest $rst)
    {
        $user = auth::user();
        $user->name = $rst->name;
        $user->email = $rst->email;

        $user->save();

        return redirect()->back()->with('success', 'Details added successfully!');
    }
}
