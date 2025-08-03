<?php

namespace App\Http\Controllers;
use App\Models\schoolevents;

use Illuminate\Http\Request;

class EventController extends Controller
{
    function store(Request $request){
$DataSchoolEvents=new schoolevents();
$DataSchoolEvents->name=$request->name;
$DataSchoolEvents->title=$request->title;
if($request->hasFile('image')){
    $file=$request->file('image');
    $filename=time().".".$file->getClientOriginalExtension();
    $file->move(public_path('uploads'),$filename);
    $DataSchoolEvents->image=$filename;
     if ($DataSchoolEvents->save()) {

            return redirect('/')->with("success", 'Details added successfully!');
        } else {
            return back()->with("Error", "Somthing Wrong");
        }
}
}
// fetch data
function index(){
    $getSchoolEvents=schoolevents::all();
    return view('events',["getinfo"=>$getSchoolEvents]);
}

    
}
