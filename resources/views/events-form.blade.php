@extends('layouts.app')
@section('content')
<div class="flex items-center justify-center min-h-[calc(120vh-160px)]
 bg-gray-100">
  <form action="{{url('events')}}" enctype="multipart/form-data" method="POST" class="bg-white/90 backdrop-blur-sm p-8 rounded-2xl shadow-lg w-full max-w-lg">
    @csrf


    <h2 class="text-2xl font-bold text-blue-900 mb-6 text-center">New Details Of Events</h2>

    <!-- Title -->
    <div class="mb-5">
      <label for="title" class="block mb-1 text-gray-700 font-medium">Events Name</label>
      <input type="text" name="name" id="name"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-900"
        placeholder="Enter Events Name..." required>
    </div>
    <div class="mb-5">
      <label for="title" class="block mb-1 text-gray-700 font-medium">Events Title</label>
      <input type="text" name="title" id="title"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-900"
        placeholder="Enter  Events title..." required>
    </div>

    <div class="mb-5">
      <label for="title" class="block mb-1 text-gray-700 font-medium">image</label>
      <input type="file" name="image" id="title"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-900"
        placeholder="Upload File..." required>
    </div>


    <!-- Submit Button -->
    <div class="text-center">
      <button type="submit"
        class="bg-blue-900 hover:bg-blue-800 text-white font-semibold py-2 px-6 rounded-lg shadow-md transition duration-200">
        Add
      </button>
    </div>
  </form>
</div>
@endsection