<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FeatureRequest;
use App\Http\Controllers\Controller;
use App\Models\HomeFeature;
use App\Models\TextContent;


class HomeController extends Controller
{
    public function create()
    {
        return view('home.feature-form');
    }

    public function store(FeatureRequest $request)
    {

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
