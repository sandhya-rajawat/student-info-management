<?php

namespace App\Http\Controllers;

use App\Models\Invite;
use Illuminate\Http\Request;
use app\Http\Requests\RegisterInviteRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterInviteController extends Controller
{
    public function accept($token)
    {
        $invite = Invite::where('token', $token)->where('status', 'pending')->first();
        if (!$invite) {
            return redirect('/')->with('error', 'Invalid or expired invite link');
        }


        return view('portals.register-invite', compact('invite'));
    }
    public function store(RegisterInviteRequest $request)
    {
        $invite = Invite::where('email', $request->email)->where('status', 'pending')->first();

        if (!$invite) {
            return redirect('/')->with('error', 'Invalid or expired invite');
        }
        // user create new

        $user = User::create([
            'name' => $request->name,
            'email' => $invite->email,
            'password' => Hash::make($request->password)

        ]);
        $invite->update([
            'status' => 'accepted'
        ]);
        return redirect('/login')->with('success', 'Registration successful! You can now login.');
    }
}
