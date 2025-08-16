@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto bg-yellow-50 shadow-lg rounded-lg p-6 mt-20">
    <h2 class="text-2xl font-semibold mb-6 text-gray-800 text-center">Edit Profile</h2>

    <form action="{{ url('profile-edit') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
        @csrf
        @method('PUT')

        <!-- Profile Photo -->
        <div class="text-center">
            <img src="{{ $user->image ? asset('uploads/' . $user->image) : asset('default-avatar.png') }}"
                alt="Profile Photo" class="w-24 h-24 rounded-full mx-auto mb-2 object-cover border">
            <input type="file" name="image" class="mt-2 block w-full text-sm text-gray-600">
        </div>

        <!-- Name -->
        <div>
            <label class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}"
                class="mt-1 block w-full p-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
        </div>

        <!-- Email -->
        <div>
            <label class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}"
                class="mt-1 block w-full p-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
        </div>

        <!-- Buttons (side by side) -->
        <div class="flex justify-center space-x-4 mt-6">
            <!-- Reset Password -->
            <a href="{{ url('/reset-password') }}"
                class="inline-block px-4 py-2 border border-gray-500 text-gray-700 rounded-lg hover:text-white hover:bg-gray-500 transition duration-150">
                Change Password
            </a>

            <!-- Update -->
            <button type="submit"
                class="px-6 py-2 border border-gray-500 text-gray-700 rounded-lg hover:bg-gray-500 hover:text-white transition duration-150">
                Update
            </button>
        </div>
    </form>
</div>
@endsection