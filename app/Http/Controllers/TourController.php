<?php

namespace App\Http\Controllers;

use  App\Models\TextContent;
use App\Http\Requests\TourRequest;

use Illuminate\Http\Request;

class TourController extends Controller


{
    public function create()
    {
        return view('home.tour-content-form');
    }

    public function store(TourRequest $request)
    {
        $data = $request->only(['title', 'description']);
        TextContent::create($data);
        return redirect('/')->with('success', 'Message added successfully!');
    }

    //  public function index(){
    //         $textcontent=textcontent::first();
    //         return view('home.index',['data'=>$textcontent]);

}
