<?php

namespace App\Http\Controllers;
use App\Http\Requests\ResetPasswordRequest;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function create(){
        return view('reset-password');
    }
public function changePassword(ResetPasswordRequest $rst)
{
    $user = Auth::user(); // current login user
    
    // password update
    $user->password = $rst->new_password;
    $user->save();

    return redirect()->back()->with('success', 'Password updated successfully.');
}
  
}
