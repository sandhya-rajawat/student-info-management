@extends('layouts.app')
@section('content')
  <section class="text-center py-10">
  <div class="min-h-screen flex flex-col">

  <!-- Hero Section -->
  <div class="relative">
    <img src="{{ asset('image/students.webp') }}" alt="students" class="w-screen h-full ">

    <!-- Positioned content -->
    <div class="absolute top-[150px] left-10 bg-white/80 p-6 rounded-xl shadow-lg max-w-lg">
      <h1 class="text-4xl font-bold text-gray-800">rjghkhkj</h1>
      <p class="mt-4 text-gray-700">dndsknkjn</p>
    </div>
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
      
        <div class="bg-white p-4 rounded-xl shadow-md">
          <img src="{{ asset('image/students.webp') }}" class="w-full h-40 object-cover rounded-lg mb-4" alt="Blog Image">
          <a href="blog-detils"><h3 class="text-xl font-semibold mb-2  cursor-pointer">kjdsfnkjds</h3></a>
          <p class="text-gray-700 text-sm mb-3">vnfkjvnkjfnv</p>
          <div class="flex space-x-4 text-gray-600 text-sm mt-2">
            <p>mvndkmvn</p>
            <p>vnkmfnvkmdf v</p>
          </div>
        </div>
     kvnadskjvkn
      </div>
    </div>
  </div>

  <!-- Call to Action
  <div class="bg-blue-200 text-white p-10 text-center">
    <h2 class="text-3xl font-bold mb-4">Get Started Now</h2>
    <p class="mb-6">Start managing your student records efficiently today.</p>
    <a href="signup" class="bg-white text-gray-700 px-6 py-3 rounded-full font-semibold hover:bg-gray-200 transition">Sign In</a>
  </div> -->

</div>

  </section>
@endsection
