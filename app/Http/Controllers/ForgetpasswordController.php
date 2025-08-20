<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgetpasswordController extends Controller
{
    public function create(){
        return view('Forget-password');
    }
}
