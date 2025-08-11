<?php

namespace App\Http\Controllers;

use App\Models\teacher;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    // form create
    public function create()
    {
        return view('teacher-community-form');
    }
    public function store(Request $request)
    {

        $request->validate(
            [
              
                'possition' => 'required|string',
                'edution' => 'required|string',
                'name' => 'required|string',
                'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            ],
            [
                'image.image' => 'Uploaded file must be an  jpg, jpeg, png, or webp .',
                'image.mimes' => 'Image must be in jpg, jpeg, png, or webp format.',
                'image.max' => 'Image size must not exceed 2MB.'
            ]
        );

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
