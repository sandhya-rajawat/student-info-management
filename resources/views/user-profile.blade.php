@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto bg-white shadow-lg rounded-lg p-6 mt-20">
    <h2 class="text-2xl font-semibold mb-6 text-gray-800 text-center">Edit Profile</h2>

  
 

  <form action="{{ url('profile-edit') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
        @csrf
        @method('PUT')

        <!-- Profile Photo -->
        <div class="text-center">
            <img  src="{{ $user->image ? asset('uploads/' . $user->image) : asset('default-avatar.png') }}" 
                 alt="Profile Photo" class="w-24 h-24 rounded-full mx-auto mb-2 object-cover border">
            <input type="file" name="image" class="mt-2 block w-full text-sm text-gray-600">
        </div>

        <!-- Name -->
        <div>
            <label class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}"
                   class="mt-1 block w-full p-2 border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
        </div>

        <!-- Email -->
        <div>
            <label class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}"
                   class="mt-1 block w-full p-2 border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
        </div>

        

        <!-- New Password -->
        <div>
            <label class="block text-sm font-medium text-gray-700">New Password</label>
            <input type="password" name="password"
                   class="mt-1 block w-full p-2 border-gray-300 rounded-lg shadow-sm focus:ring-gray-500 focus:border-gray-500">
            <small class="text-gray-500">Leave blank if you don't want to change it.</small>
        </div>

        <!-- Confirm Password -->
        <div>
            <label class="block text-sm font-medium text-gray-700">Confirm Password</label>
            <input type="password" name="password_confirmation"
                   class="mt-1 block w-full p-2 border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <!-- Submit -->
        <div class="text-center">
            <button type="submit" 
                    class="px-6 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition duration-150">
                𝚄𝚙𝚍𝚊𝚝𝚎
            </button>
        </div>
    </form>
</div>
@endsection
