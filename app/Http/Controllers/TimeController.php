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
        $DataSclTime = new SchoolTime();
        $DataSclTime->title = $request->title;
        $DataSclTime->day = $request->day;
        if ($DataSclTime->save()) {

            return redirect()->back()->with("success", 'Details added successfully!');
        } else {
            return   redirect()->back()->with("Error", "Somthing Wrong");
        }
    }

    // data list
    function index()
    {
        $GetTime = SchoolTime::all();
        return view('school-time', ['GetTimeInfo' => $GetTime]);
    }
}
