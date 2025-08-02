@extends('layouts.app')
@section('content')
 <div class="relative">
    <img src="{{asset('image/dance.jpg')}}" alt="Students in Classroom" class="w-full h-64 object-cover rounded-xl shadow-md" />
  </div>

<div class="p-10  mt-10">
  <div class="max-w-7xl mx-auto">
    <h2 class="text-3xl font-bold mb-6 text-center text-blue-900">Top Tranding News</h2>
    <div class="grid md:grid-cols-3 gap-6">

      <!-- Card 1 -->
      <div class="bg-white p-4 rounded-xl shadow-md">
        <img src="{{ asset('image/Staples_High_School,_Westport,_CT.jpg') }}" class="w-full h-40 object-cover rounded-lg mb-4" alt="Blog Image">
        <a href="blog-details"><h3 class="text-xl font-semibold mb-2 cursor-pointer">Sample Blog Title 1</h3></a>
        <p class="text-gray-700 text-sm mb-3">Short description of the blog feature goes here. It explains the feature.</p>
        <div class="flex space-x-4 text-gray-600 text-sm mt-2">
          <p>Created: 01 Aug 2025</p>
          <p>Updated: 02 Aug 2025</p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-white p-4 rounded-xl shadow-md">
        <img src="{{ asset('image/Staples_High_School,_Westport,_CT.jpg') }}" class="w-full h-40 object-cover rounded-lg mb-4" alt="Blog Image">
        <a href="blog-details"><h3 class="text-xl font-semibold mb-2 cursor-pointer">Sample Blog Title 2</h3></a>
        <p class="text-gray-700 text-sm mb-3">Another feature description. Highlighting benefits and clarity.</p>
        <div class="flex space-x-4 text-gray-600 text-sm mt-2">
          <p>Created: 25 Jul 2025</p>
          <p>Updated: 28 Jul 2025</p>
        </div>
      </div>
      <div class="bg-white p-4 rounded-xl shadow-md">
        <img src="{{ asset('image/Staples_High_School,_Westport,_CT.jpg') }}" class="w-full h-40 object-cover rounded-lg mb-4" alt="Blog Image">
        <a href="blog-details"><h3 class="text-xl font-semibold mb-2 cursor-pointer">Sample Blog Title 2</h3></a>
        <p class="text-gray-700 text-sm mb-3">Another feature description. Highlighting benefits and clarity.</p>
        <div class="flex space-x-4 text-gray-600 text-sm mt-2">
          <p>Created: 25 Jul 2025</p>
          <p>Updated: 28 Jul 2025</p>
        </div>
      </div>
      <div class="bg-white p-4 rounded-xl shadow-md">
        <img src="{{ asset('image/Staples_High_School,_Westport,_CT.jpg') }}" class="w-full h-40 object-cover rounded-lg mb-4" alt="Blog Image">
        <a href="blog-details"><h3 class="text-xl font-semibold mb-2 cursor-pointer">Sample Blog Title 2</h3></a>
        <p class="text-gray-700 text-sm mb-3">Another feature description. Highlighting benefits and clarity.</p>
        <div class="flex space-x-4 text-gray-600 text-sm mt-2">
          <p>Created: 25 Jul 2025</p>
          <p>Updated: 28 Jul 2025</p>
        </div>
      </div>
      <div class="bg-white p-4 rounded-xl shadow-md">
        <img src="{{ asset('image/Staples_High_School,_Westport,_CT.jpg') }}" class="w-full h-40 object-cover rounded-lg mb-4" alt="Blog Image">
        <a href="blog-details"><h3 class="text-xl font-semibold mb-2 cursor-pointer">Sample Blog Title 2</h3></a>
        <p class="text-gray-700 text-sm mb-3">Another feature description. Highlighting benefits and clarity.</p>
        <div class="flex space-x-4 text-gray-600 text-sm mt-2">
          <p>Created: 25 Jul 2025</p>
          <p>Updated: 28 Jul 2025</p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-white p-4 rounded-xl shadow-md">
        <img src="{{ asset('image/Staples_High_School,_Westport,_CT.jpg') }}" class="w-full h-40 object-cover rounded-lg mb-4" alt="Blog Image">
        <a href="blog-details"><h3 class="text-xl font-semibold mb-2 cursor-pointer">Sample Blog Title 3</h3></a>
        <p class="text-gray-700 text-sm mb-3">This is another blog feature that users might find useful.</p>
        <div class="flex space-x-4 text-gray-600 text-sm mt-2">
          <p>Created: 15 Jul 2025</p>
          <p>Updated: 20 Jul 2025</p>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection