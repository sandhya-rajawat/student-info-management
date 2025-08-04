@extends('layouts.app')
@section('content')

<div class="min-h-screen flex">

  <!-- Left Side - Form -->
  <div class="w-full md:w-1/2 flex items-center justify-center p-10 bg-white">
    <div class="max-w-md w-full space-y-6">
      <div class="flex items-center gap-2">
        <img src="{{ asset('image/logo.png') }}" class="w-6 h-6" alt="Logo">
        <h1 class="text-3xl font-bold text-gray-800">Sign Up</h1>
      </div>

      <p class="text-gray-500">Donec sollicitudin molestie malesuada sollicitudin</p>

      <button class="w-full border border-gray-300 rounded-full py-2 px-4 text-sm font-medium flex items-center justify-center hover:bg-gray-100">

        <a href="https://www.google.com/"> <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-5 h-5 mr-2" alt=""></a>
        Sign In With Google
      </button>

      <div class="flex items-center justify-center text-gray-400 text-sm">
        <hr class="w-1/4 border-gray-300">
        <span class="mx-2">Or Sign In With Email</span>
        <hr class="w-1/4 border-gray-300">
      </div>

      <form method="POST" action="{{url('signup')}}" class="space-y-4">
        @csrf
        <div>
          <label class="text-sm font-medium text-gray-700 block mb-1">Name</label>
          <input type="text" name="name" placeholder="Enter Name...." required
            class="w-full bg-blue-50 p-2 rounded-md border border-blue-100 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
          <label class="text-sm font-medium text-gray-700 block mb-1">Email Address</label>
          <input type="email" name="email" placeholder="you@example.com" required
            class="w-full bg-blue-50 p-2 rounded-md border border-blue-100 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
          <label class="text-sm font-medium text-gray-700 block mb-1">Contact</label>
          <input type="text" name="phone" placeholder="Your Contact...." required
            class="w-full bg-blue-50 p-2 rounded-md border border-blue-100 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
          <label class="text-sm font-medium text-gray-700 block mb-1">Gender</label>
          <input type="text" name="gender" placeholder="Enter gender....." required
            class="w-full bg-blue-50 p-2 rounded-md border border-blue-100 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>


        <div>
          <label class="text-sm font-medium text-gray-700 block mb-1">Password</label>
          <input type="password" name="password" placeholder="********" required
            class="w-full bg-blue-50 p-2 rounded-md border border-blue-100 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <button type="submit"
          class="w-full py-2 rounded-md text-white bg-gradient-to-r from-pink-400 to-orange-400 hover:from-pink-500 hover:to-orange-500 transition">
          Sign In
        </button>
      </form>
    </div>
  </div>

  <!-- Right Side - Image/Gradient -->
  <div class="hidden md:block w-1/2 bg-gradient-to-r from-pink-500 to-orange-400 text-white p-10 relative mb-10">
    <h2 class="text-3xl font-bold mt-20">Turn your All ideas into<br>your reality</h2>

    <img src="{{ asset('image/grraf.avif') }}"
      class="mt-10 rounded-xl shadow-xl opacity-70 "
      alt="Chart">


    <div class="absolute bottom-10 right-10 bg-white text-gray-800 p-4 rounded-lg shadow-md">
      <div class="font-bold">Mark Gracia</div>
      <div class="text-sm text-gray-500">iammarkgracia@gmail.com</div>
      <button class="mt-2 text-xs text-pink-600 hover:underline">+ Add to project</button>
    </div>
  </div>

</div>

@endsection