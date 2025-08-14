<?php

namespace App\Http\Controllers;
use App\Http\Requests\ResetPasswordRequest;

use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function create(){
        return view('reset-password');
    }

    public function changePassword(ResetPasswordRequest $rst){

    }
}
