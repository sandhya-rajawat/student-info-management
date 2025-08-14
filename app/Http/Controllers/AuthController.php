<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\AuthRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\VerifyOtpRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function createSignUp()
    {
        return view('signup');
    }

    public function createSignIn()
    {
        return view('signin');
    }

    public function store(AuthRequest $request)
    {
        $data = $request->only(['name', 'email', 'phone', 'gender']);
        $data['password'] = $request->password;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
            $data['image'] = $filename;
        }
        $user = User::create($data);

        if ($user) {
            return redirect('/signin')->with("success", 'Account created! Please log in.');
        } else {
            return back()->with("error", 'Failed to create account!');
        }
    }

    public function loginUser(LoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if ($user && $request->password=== $user->password) {
            // Generate OTP
            $otp = rand(100000, 999999);
            $user->otp = $otp;
            $user->otp_expiration = now()->addMinutes(2);
            $user->save();

            Log::info('Generated OTP for user ID ' . $user->id . ': ' . $otp); //  Logging OTP

            Session::put('user_id', $user->id);
            return redirect('/verify-otp'); // Don't send OTP to frontend
        }

        return back()->with('error', 'Invalid Email or Password');
    }

    public function showOtpForm()
    {
        $user = Session::get('user_id');

        if (!$user) {
            return redirect('/signin')->with('error', 'Please login first.');
        }

        return view('auth.verify-otp'); // No OTP passed to view
    }

    public function verifyOtp(VerifyOtpRequest $request)
    {
        $userId  = Session::get('user_id');
        if (!$userId) {
            return redirect('/signin')->with('error', 'Please login first.');
        }

        $dbUser = User::find($userId);

        if ($dbUser->otp !== $request->otp) {
            return back()->with('error', 'Invalid OTP.');
        }

        if (now()->greaterThan($dbUser->otp_expiration)) {
            return back()->with('error', 'OTP expired.');
        }

        // OTP verified
        $dbUser->is_verified = 1;
        $dbUser->otp = null;
        $dbUser->otp_expiration = null;
        $dbUser->save();

        Auth::guard()->login($dbUser);
        return redirect('/')->with('success', 'OTP Verified Successfully!');
    }

    public function logoutUser()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Logged out successfully!');
    }
}
