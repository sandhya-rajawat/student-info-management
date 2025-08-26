<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForgetpasswordRequest;
use App\Http\Requests\FindAccountRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ForgetpasswordController extends Controller
{
    public function resetpasswordcreate()
    {
        return view('find-account');
    }

    public function findAccount(FindAccountRequest $request)
    {
        // User ko dhoondo
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return back()->withErrors(['email' => 'Email not found']);
        }
        return redirect()->route('forget-password.form', ['id' => $user->id]);
    }
    public function create($id)
    {
        return view('Forget-password', compact('id'));
    }
    public function store(ForgetpasswordRequest $request, $id)
    {
        // Password update karo
        $user = User::findOrFail($id);
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->back()->with('success', 'Password updated successfully.');
      
    }
}
