<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    // Show signup in form
      public function createSignUp()
    {
        return view('signup');
    }
    // Show sign in form
    public function createSignIn()
    {
        return view('signin'); 
    }
   // Store Signup Data
    public function store(Request $request)
    {
        // Validate data
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'phone'    => 'required|string|max:20',
            'password' => 'required|min:6|confirmed',
            'gender'   => 'required',
        ]);

        $user = new User();
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->phone    = $request->phone;
        $user->password = Hash::make($request->password);
        $user->gender   = $request->gender;

        if ($user->save()) {
            return redirect('/')->with("success", 'Details added successfully!');
        } else {
            return back()->with("error", 'Failed to save data!');
        }
    }

    // Login
    public function loginUser(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Session::put('profile', $user);
            return redirect('/')->with('success', 'Logged in successfully!');
        } else {
            return back()->with('error', 'Invalid Email or Password');
        }
    }
    public function logoutUser()
{
    Session::forget('profile');
    return redirect('/')->with('success', 'Logged out successfully!');
}

}

