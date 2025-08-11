<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherRequest;

use App\Models\teacher;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    // form create
    public function create()
    {
        return view('teacher-community-form');
    }
    public function store(TeacherRequest $request)
    {
        $DataDetail = new teacher();
        $DataDetail->name = $request->name;
        $DataDetail->possition = $request->possition;
        $DataDetail->Eduction = $request->edution;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
            $DataDetail->image = $filename;
        }
        if ($DataDetail->save()) {

            return redirect()->back()->with("success", 'Details added successfully!');
        } else {
            return redirect()->back()->with("Error", "Somthing Wrong");
        }
    }


    public function index()
    {
        $GetDataDetail = teacher::all();
        return view('teacher-community', ['data' => $GetDataDetail]);
    }
}
