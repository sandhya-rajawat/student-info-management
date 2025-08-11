<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Models\SchoolBlog;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function create()
    {
        return view('blog-form');
    }

    public function store(BlogRequest $request)
    {
        $homeSection = new SchoolBlog;
        $homeSection->title = $request->title;
        $homeSection->description = $request->description;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
            $homeSection->image = $filename;
        }

        if ($homeSection->save()) {
            return redirect()->back()->with('success', 'Details added successfully!');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function index()
    {
        $details = SchoolBlog::all();
        return view('blog', ['data' => $details]);
    }
}
