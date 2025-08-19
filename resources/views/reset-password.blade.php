@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto bg-white shadow-lg rounded-lg p-6 mt-40">
    <h2 class="text-2xl font-semibold mb-6 text-gray-800 text-center">Reset Password</h2>

    <!-- Success Message -->
    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    <!-- Validation Errors -->
    @if ($errors->any())
        <div class="mb-4 p-3 bg-red-100 text-red-700 rounded">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ url('/reset-password') }}" method="POST" class="space-y-5">
        @csrf
        @method('PUT')

        <!-- Current Password -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mt-10">Current Password</label>
            <input type="password" name="current_password"
                class="block w-full p-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                required>
            @error('current_password')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- New Password -->
        <div class="mt-2">
            <label class="block text-sm font-medium text-gray-700">New Password</label>
            <input type="password" name="new_password"
                class="mt-1 block w-full p-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                required>
            @error('new_password')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mt-2">
            <label class="block text-sm font-medium text-gray-700">Confirm Password</label>
            <input type="password" name="new_password_confirmation"
                class="mt-1 block w-full p-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                required>
            @error('new_password_confirmation')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Submit -->
        <div class="flex justify-center mt-7">
            <button type="submit"
                class="px-6 py-2 border border-gray-500 text-gray-700 rounded-lg hover:bg-gray-500 hover:text-white transition duration-150">
                Update Password
            </button>
        </div>
    </form>
</div>
@endsection
