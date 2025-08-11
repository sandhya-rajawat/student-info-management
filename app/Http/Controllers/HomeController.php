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
        $data = $request->only(['title', 'description']);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
            $data['image'] = $filename;
        }
        HomeFeature::create($data);

        return redirect()->back()->with('success', 'Details added successfully!');
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
