<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherInviteController extends Controller
{
public function create(){
    return view('portals.invite-student');
} 
}
