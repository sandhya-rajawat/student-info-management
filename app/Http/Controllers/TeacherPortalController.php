<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherPortalController extends Controller
{
    public function index()

    {
        $totalStudents = User::where('role', 'student')->count();
        $activeStudents = User::where('role', 'student')->where('is_verified', 1)->count();
        $pendingStudents =User::where('role','student')->where('is_verified',0)->count();



        if (Auth::check() && Auth::user()->role === 'teacher') {

            return view('portals.teacher-portal', compact(
                'totalStudents',
                'activeStudents',
                'pendingStudents'
            ));
        } else {
            return redirect('/')->with('error', 'Unauthorized access.');
        }
    }
}
