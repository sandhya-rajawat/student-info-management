@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto bg-white shadow-lg rounded-lg p-6 mt-40">
    <h2 class="text-2xl font-semibold mb-6 text-gray-800 text-center">Reset Password</h2>

    <form action="{{ url('/reset-password') }}" method="POST" class="space-y-5">
        @csrf
        @method('PUT')

        <!-- Current Password -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mt-10 ">Current Password</label>
            <input type="password" name="current_password"
                class=" block w-full    p-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                required>
        </div>
        <div class="mt-2">
            <label class="block text-sm font-medium text-gray-700">New Password</label>
            <input type="password" name="password"
                class="mt-1 block w-full p-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                required>
        </div>

        <!-- Confirm Password -->
        <div class="mt-2">
            <label class="block text-sm font-medium text-gray-700">Confirm Password</label>
            <input type="password" name="password_confirmation"
                class="mt-1 block w-full p-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                required>
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