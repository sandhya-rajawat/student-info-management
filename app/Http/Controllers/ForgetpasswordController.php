<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForgetpasswordRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ForgetpasswordController extends Controller
{
    public function create()
    {
        return view('Forget-password'); // form show karega
    }

    public function store(ForgetpasswordRequest $request)
    {
        // User ko dhoondo
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'This email is not registered.']);
        }

        // Password update karo
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->back()->with('success', 'Password updated successfully.');
    }
}
