<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SchoolTime;
use App\Http\Requests\TimeRequest;

class TimeController extends Controller
{
    // create form
    public function create()
    {
        return view('school-time-form');
    }

    // save the form
    public function store(TimeRequest $request)
    {

        $data = $request->only(['title', 'day']);
        $user = SchoolTime::create($data);
        if ($user) {
            return redirect()->back()->with('success', 'Details added successfully!');
        } else {
            return back()->with("error", 'Failed to create account!');
        }
    }

    // data list
    function index()
    {
        $GetTime = SchoolTime::all();
        return view('school-time', ['GetTimeInfo' => $GetTime]);
    }
}
