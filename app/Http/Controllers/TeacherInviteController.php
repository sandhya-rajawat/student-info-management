<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Invite; 
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Http\Requests\TeacherInviteRequest;

class TeacherInviteController extends Controller
{
public function create(){
    return view('portals.invite-student');
} 
public function store(TeacherInviteRequest $request){
    // generate token
    $token=Str::random(50);
 
 $invite = Invite::create([
    'name'       => $request->name,
    'email'      => $request->email,
    'token'      => $token,
    'invited_by' => auth()->id(),
    'status'     => 'pending',
]);
$invitelink=url('/portals.register-invite/'.$token);
return redirect()->back()->with(['success'=> 'Invite sent successfully!',
'invite_link'=>$invitelink]);


}
}
