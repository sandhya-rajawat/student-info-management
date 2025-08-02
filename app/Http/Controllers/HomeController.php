<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // ✅ Important
use App\Models\homefeature ;
use App\Models\textcontent;


class HomeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $homeSection = new homefeature;
        $homeSection->title = $request->title;
        $homeSection->description = $request->description;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
            $homeSection->image = $filename;
        }

        if ($homeSection->save()) {
            return redirect('/')->with('success', 'Details added successfully!');
        } else {
            return back()->with('error', 'Something went wrong!');
        }
    }

    public function index()
    {
        $details = homefeature::all();
  $textcontent = textcontent::latest()->first();

        return view('home.index', [
          'data' => $textcontent,
            'detail' => $details
        ]);
    }
}
