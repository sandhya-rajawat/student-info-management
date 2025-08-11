@extends('layouts.app')
@section('content')
<section class="text-center py-10">
  <div class="min-h-screen flex flex-col">

    <!-- Hero Section -->
    <div class="relative">
      <img src="{{ asset('image/students.webp') }}" alt="students" class="w-screen h-full ">

      <!-- Positioned content -->
      @if($data)
      <div class="absolute top-[150px] left-10 bg-white/80 p-6 rounded-xl shadow-lg max-w-lg">

        <h1 class="text-4xl font-bold text-gray-800">{{$data->title}}</h1>
        <p class="mt-4 text-gray-700">{{$data->description}}</p>
      </div>
      @endif
    </div>

    <!-- About Section -->
    <div class="p-10 bg-gray-100">
      <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-3xl font-bold mb-4 text-blue-900">About Our System</h2>
        <p class="text-gray-700">
          This system is designed to help educational institutions manage student data efficiently. It offers functionalities like adding, updating, deleting, and viewing student information in a secure and user-friendly interface.
        </p>
      </div>
    </div>

    <!-- Features Section -->
    <div class="p-10 bg-white mt-10">
      <div class="max-w-7xl mx-auto">
        <h2 class="text-3xl font-bold mb-6 text-center text-blue-900">Key Features</h2>
        <div class="grid md:grid-cols-3 gap-6">
          @foreach($detail as $info)
          <div class="bg-white p-4 rounded-xl shadow-md">
            <img src="{{ asset('uploads/' . $info->image) }}" accept=".jpg,.jpeg,.png,image/jpeg,image/png" class="w-full h-40 object-cover rounded-lg mb-4" alt="Blog Image">
            <a href="blog-detils">
              <h3 class="text-xl font-semibold mb-2  cursor-pointer">{{$info->title}}</h3>
            </a>
            <p class="text-gray-700 text-sm mb-3">{{$info->description}}</p>
            <div class="flex space-x-4 text-gray-600 text-sm mt-2">
              <p>{{$info->created_at}}</p>
              <p>{{$info->updated_at}}</p>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </div>



  </div>

</section>
@endsection