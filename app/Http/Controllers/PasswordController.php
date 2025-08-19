<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ResetPasswordRequest;
use App\Models\User;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function create()
    {
        return view('reset-password');
    }
    public function changePassword(ResetPasswordRequest $rst)
    {
        /**@var User $user */
        $user = Auth::user(); // current login user

        // password update
        $user->password =Hash::make( $rst->new_password);
        $user->save();

        return redirect()->back()->with('success', 'Password updated successfully.');
    }
}
