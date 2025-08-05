@extends('layouts.app') 

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold text-center text-blue-800 mb-4">OTP Verification</h2>

        <form action="{{ url('/verify-otp') }}" method="POST">
            @csrf
            <label class="block mb-2 text-gray-700">Enter OTP</label>
            <input type="text" name="otp" class="w-full border px-4 py-2 rounded mb-4" required>

            <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-2 rounded">
                Verify OTP
            </button>
        </form>

        @if(session('error'))
            <div class="mt-4 text-red-600 text-center">
                {{ session('error') }}
            </div>
        @endif
    </div>
</div>

@endsection
