<?php

namespace App\Http\Controllers;

use App\Models\teacher;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    // form create
    public function create(){
        return view('teacher-community-form');
    }
    public function store(Request $request)
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

            return redirect('/')->with("success", 'Details added successfully!');
        } else {
            return  back()->with("Error", "Somthing Wrong");
        }
    }


    public function index()
    {
        $GetDataDetail = teacher::all();
        return view('teacher-community', ['data' => $GetDataDetail]);
    }
}
