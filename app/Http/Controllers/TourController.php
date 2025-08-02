<?php

namespace App\Http\Controllers;
use  App\Models\textcontent;

use Illuminate\Http\Request;

class TourController extends Controller


{
public function store(Request $request)
    {
        //  Step 1: Validate input
        $validated = $request->validate([
            'title' => 'required|string|max:255',
           'description' => 'required|string',
          
        ]);

        //  Step 2: Create new instance
        $message = new textcontent();
        $message->title = $validated['title'];
        $message->description = $validated['description'];


        // Step 4: Save to DB
        if ($message->save()) {
            return redirect('/')->with('success', 'Message added successfully!');
        }

        return back()->with('error', 'Something went wrong.');
    }

    // public function index(){
    //     $textcontent=textcontent::first();
    //     return view('home.index',['data'=>$textcontent]);
    // }
}

