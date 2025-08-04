<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SchoolTime;

class TimeController extends Controller
{
    // create form
    public function create()
    {
        return view('school-time-form');
    }

    // save the form
    public function store(Request $request)
    {
        $DataSclTime = new SchoolTime();
        $DataSclTime->title = $request->title;
        $DataSclTime->day = $request->day;
        if ($DataSclTime->save()) {

            return redirect('/')->with("success", 'Details added successfully!');
        } else {
            return  back()->with("Error", "Somthing Wrong");
        }
    }

    // data list
    function index()
    {
        $GetTime = SchoolTime::all();
        return view('school-time', ['GetTimeInfo' => $GetTime]);
    }
}
