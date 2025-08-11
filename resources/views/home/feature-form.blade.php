@extends('layouts.app')
@section('content')


<div class="flex items-center justify-center max-h-[calc(100vh-120px)] mt-30">
  <form action="{{url('features')}}" enctype="multipart/form-data" method="POST" class="bg-white/90 backdrop-blur-sm p-8 rounded-2xl shadow-lg w-full max-w-lg">
    @csrf
    <h2 class="text-2xl font-bold text-blue-800 mb-6 text-center">New Key Feacture</h2>

    <!-- Title -->
    <div class="mb-5">
      <label for="title" class="block mb-1 text-gray-700 font-medium">Title</label>
      <input type="text" name="title" id="title"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-900"
        placeholder="Enter title..." required>
    </div>
    <div class="mb-5">
      <label for="title" class="block mb-1 text-gray-700 font-medium">image</label>
      <input type="file" name="image" id="title" accept=".jpg,.jpeg,.png,image/jpeg,image/png"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-900"
        placeholder="Upload File..." required>
    </div>

    <!-- Description -->
    <div class="mb-5">
      <label for="description" class="block mb-1 text-gray-700 font-medium">Description</label>
      <textarea name="description" id="description"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg h-32 resize-none focus:outline-none focus:ring-2 focus:ring-blue-900"
        placeholder="Write something..." required></textarea>
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
@if ($errors->any())
    <script>
        alert("{{ $errors->first() }}");
    </script>
@endif

@if(session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
@elseif(session('error'))
    <script>
        alert("Failed with your invalid HTML file");
    </script>
@endif


@endsection