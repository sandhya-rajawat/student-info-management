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

        $data = $request->only(['name', 'possition', 'edution']);
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
            $data['image'] = $filename;
        }
        teacher::create($data);

        return redirect()->back()->with("Error", "Somthing Wrong");
    }


    public function index()
    {
        $GetDataDetail = teacher::all();
        return view('teacher-community', ['data' => $GetDataDetail]);
    }
}
