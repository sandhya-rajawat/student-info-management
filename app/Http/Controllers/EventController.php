<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\SchoolEvent;

use Illuminate\Http\Request;

class EventController extends Controller
{
    // create form
    public function create()
    {
        return view('events-form');
    }
    // save the form data
    public function store(EventRequest $request)
    {
        $data = $request->only('title', 'name');


        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
            $data['image'] = $filename;
        }

        SchoolEvent::create($data);
        return redirect()->back()->with("success", 'Details added successfully!');
    }


    // fetch data
    function index()
    {
        $getSchoolEvents = SchoolEvent::all();
        return view('events', ["getinfo" => $getSchoolEvents]);
    }
}
