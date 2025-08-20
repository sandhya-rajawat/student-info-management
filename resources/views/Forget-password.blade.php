@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto mt-55  bg-white p-6 shadow rounded">
    <h2 class="text-2xl font-bold mb-4">Reset Password</h2>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-2 rounded mb-3">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="#">
        @csrf

        <!-- Email -->
        <div class="mb-4">
            <label class="block text-sm font-medium">Email</label>
            <input type="email" name="email" required
                class="w-full border rounded px-3 py-2">
            @error('email')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- New Password -->
        <div class="mb-4">
            <label class="block text-sm font-medium">New Password</label>
            <input type="password" name="password" required
                class="w-full border rounded px-3 py-2">
            @error('password')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mb-4">
            <label class="block text-sm font-medium">Confirm Password</label>
            <input type="password" name="password_confirmation" required
                class="w-full border rounded px-3 py-2">
        </div>

        <button type="submit"
            class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
            Reset Password
        </button>
    </form>
</div>
@endsection
