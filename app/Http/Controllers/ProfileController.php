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

        if($rst->hasFile('image')){
            if($user->image && file_exists(public_path('uploads/'. $user->image))){
                unlink(public_path('uploads/'.$user->image));
            }
            $imageName=time(). '.' . $rst->image->extension();
            $rst->image->move(public_path('uploads'),$imageName);
             $user->image = $imageName;
        }

        $user->save();

        return redirect()->back()->with('success', 'Details added successfully!');
    }
}
