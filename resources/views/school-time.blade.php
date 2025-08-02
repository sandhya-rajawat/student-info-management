@extends('layouts.app')
@section('content')
<div class="min-h-[calc(110vh-160px)] bg-gray-100 py-10">

  <!-- Banner Section -->
  <div class="relative pt-10">
    <img src="image/schooltime.jpeg" alt="School Banner" class="w-full h-50 object-cover">
    <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-6xl font-bold backdrop-blur-sm pt-10">
      <span>School</span>
      <span>Timings</span>
    </div>
  </div>

  <!-- Section Heading -->
  <div class="text-center mt-5">
    <h2 class="text-xl font-bold uppercase tracking-wider text-blue-900">School Timings</h2>
    <div class="mt-2 border-b-2 w-24 mx-auto border-pink-500"></div>
  </div>

  <!-- Timings Grid (Static Entries) -->
  <div class="max-w-6xl mx-auto mt-5 mb-5 px-4 grid grid-cols-1 md:grid-cols-3 gap-8 text-center">

    <!-- Example Timing Card 1 -->
    <div class="bg-red-50 p-5 rounded-lg shadow">
      <h3 class="text-lg font-semibold mb-2">Pre-Primary</h3>
      <p class="text-sm text-gray-700">Monday to Friday</p>
      <div class="flex space-x-4 text-gray-600 text-sm mt-2">
        <p>Created: 2025-08-01</p>
        <p>Updated: 2025-08-02</p>
      </div>
    </div>

    <!-- Example Timing Card 2 -->
    <div class="bg-red-50 p-5 rounded-lg shadow">
      <h3 class="text-lg font-semibold mb-2">Primary</h3>
      <p class="text-sm text-gray-700">Monday to Saturday</p>
      <div class="flex space-x-4 text-gray-600 text-sm mt-2">
        <p>Created: 2025-08-01</p>
        <p>Updated: 2025-08-02</p>
      </div>
    </div>

    <!-- Example Timing Card 3 -->
    <div class="bg-red-50 p-5 rounded-lg shadow">
      <h3 class="text-lg font-semibold mb-2">Secondary</h3>
      <p class="text-sm text-gray-700">Monday to Saturday</p>
      <div class="flex space-x-4 text-gray-600 text-sm mt-2">
        <p>Created: 2025-08-01</p>
        <p>Updated: 2025-08-02</p>
      </div>
    </div>

  </div>
</div>
@endsection