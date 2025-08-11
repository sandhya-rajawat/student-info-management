<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use App\Models\HomeFeature;
use App\Models\TextContent;


class HomeController extends Controller
{
    public function create(){
        return view('home.feature-form');
    }
  
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ],
        ['image.image' => 'Uploaded file must be an  jpg, jpeg, png, or webp .',
        'image.mimes' => 'Image must be in jpg, jpeg, png, or webp format.',
        'image.max' => 'Image size must not exceed 2MB.']);

        $homeSection = new HomeFeature;
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
            return redirect()->back()->with('error', true);
        }
    }

    public function index()
    {
        $details = HomeFeature::all();
        $textcontent = TextContent::latest()->first();

        return view('home.index', [
            'data' => $textcontent,
            'detail' => $details
        ]);
    }
}
