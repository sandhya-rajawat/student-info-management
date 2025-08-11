@extends('layouts.app')
@section('content')
<div class="flex items-center justify-center min-h-[calc(120vh-160px)]
 bg-gray-100">
  <form action="{{url('teachers')}}" enctype="multipart/form-data" method="POST" class="bg-white/90 backdrop-blur-sm p-8 rounded-2xl shadow-lg w-full max-w-lg">
    @csrf


    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">New Teachers</h2>

    <!-- Title -->
    <div class="mb-5">
      <label for="title" class="block mb-1 text-gray-700 font-medium">name</label>
      <input type="text" name="name" id="name"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-900"
        placeholder="Enter title..." required>
    </div>
    <div class="mb-5">
      <label for="title" class="block mb-1 text-gray-700 font-medium">Eduction</label>
      <input type="text" name="edution" id="edution"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-900"
        placeholder="Enter title..." required>
    </div>
    <div class="mb-5">
      <label for="title" class="block mb-1 text-gray-700 font-medium">Possition</label>
      <input type="text" name="possition" id="possition"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-900"
        placeholder="Enter title..." required>
    </div>
    <div class="mb-5">
      <label for="title" class="block mb-1 text-gray-700 font-medium">image</label>
      <input type="file" name="image" id="title" accept=".jpg,.jpeg,.png,image/jpeg,image/png"
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