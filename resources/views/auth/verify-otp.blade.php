@extends('layouts.app') 
@section('content')

<!-- Simple HTML form -->
 <div class="mt-50 font-bold ml-60 text-center">
<form method="POST" action="{{ route('verifyOtp') }}">
    @csrf
    <label>Enter OTP:</label>
    <input type="text" name="otp" required />
    <button type="submit">Verify</button>

    @if(session('error'))
        <p style="color:red">{{ session('error') }}</p>
    @endif
</form>

{{-- Testing ke liye OTP show karna chaho to --}}
@if(isset($otp))
    <p><strong>OTP: {{ $otp }}</strong></p>
@endif
 </div>

@endsection
