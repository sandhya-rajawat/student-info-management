<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileControllor extends Controller
{
    public function show(){
        $user=auth::user();
        return view('user-profile',compact('user'));
    }
}
