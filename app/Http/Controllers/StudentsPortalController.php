<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentsPortalController extends Controller
{
    public function create()
    {
        if (Auth::check() && Auth::user()->role === 'student') {
            return view('students-portal');
        } else {
            return redirect('/')->with('error', 'Unauthorized access.');
        }
    }
}
