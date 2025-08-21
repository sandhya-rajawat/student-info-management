@extends('layouts.app')

@section('content')
<div class="bg-white shadow-md rounded-lg w-full max-w-md mt-60 mx-auto">

  <div class="border-b px-6 py-4">
    <h2 class="text-lg font-bold text-gray-800">Find Your Account</h2>
  </div>

  <!-- Form Start -->
  <form action="{{ url('serch-email') }}" method="POST" class="p-6">
    @csrf
    <p class="text-gray-600 mb-4">
      Please enter your email address or mobile number to search for your account.
    </p>

    <input type="text" name="email" placeholder="Email address or mobile number"
      class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none" required>

    <!-- Buttons -->
    <div class="flex justify-end space-x-3 border-t px-6 py-4 mt-6">
      <a href="{{ url('/') }}" class="px-4 py-2 rounded-lg bg-gray-200 text-gray-800 font-semibold hover:bg-gray-300">
        Cancel
      </a>
      <button type="submit" class="px-4 py-2 rounded-lg bg-blue-600 text-white font-semibold hover:bg-blue-700">
        Search
      </button>
    </div>
  </form>
  <!-- Form End -->
</div>
@endsection
