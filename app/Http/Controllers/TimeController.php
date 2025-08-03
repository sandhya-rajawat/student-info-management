<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\schooltime;
class TimeController extends Controller
{
    function store(Request $request){
   $DataSclTime= new schooltime();
   $DataSclTime->title=$request->title;
   $DataSclTime->day=$request->day;
  if ($DataSclTime->save()) {

            return redirect('/')->with("success", 'Details added successfully!');
        } else {
            return  back()->with("Error", "Somthing Wrong");
        }
}

// Fetch data
function index(){
    $GetTime=schooltime::all();
    return view('school-time',['GetTimeInfo'=> $GetTime]);
}
}
