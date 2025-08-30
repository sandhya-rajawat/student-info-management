<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Models\Invite;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterInviteRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterInviteController extends Controller
{
    public function accept($token)
    {

        // $request = request();  // Get the current request instance
        // $fullUrl = $request->fullUrl(); // Call fullUrl() on the request instance
        // // $ip = $request->ip();  // Get user IP

        // Log::info("Invite link accessed", [
        //     'url' => $fullUrl,
        //     'token' => $token
        // ]);
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

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
            $imagePath =  $filename;
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $invite->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'gender' => $request->gender,
            'image' => $imagePath

        ]);
        $invite->update([
            'status' => 'accepted'
        ]);
        return redirect('/signin')->with('success', 'Registration successful! You can now login.');
    }
}
