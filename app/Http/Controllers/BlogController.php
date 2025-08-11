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
        $data = $request->only(['title', 'description']);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
            $data['image'] = $filename;
        }
        SchoolBlog::create($data);
        return redirect()->back()->with('success', 'Details added successfully!');
    }


    public function index()
    {
        $details = SchoolBlog::all();
        return view('blog', ['data' => $details]);
    }
}
