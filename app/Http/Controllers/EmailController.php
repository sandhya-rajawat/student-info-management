<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendOtpMail;

class EmailController extends Controller

{
    public function create()
    {
        return view('email.send-email-form');
    }
    public function sendEmail()
    {
        $to = 'sandhyarajawat1100@gmail.com';
        $otp = rand(100000, 999999);
        $subject = "Your OTP Code";

        Mail::to($to)->send(new SendOtpMail($otp, $subject));

        return "Email sent successfully!";
    }
}
