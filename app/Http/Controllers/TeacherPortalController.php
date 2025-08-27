<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherPortalController extends Controller
{
    public function create()
    {
        if (Auth::check() && Auth::user()->role === 'teacher') {
            return view('teacher-portal');
        } else {
            return redirect('/')->with('error', 'Unauthorized access.');
        }
    }
}
