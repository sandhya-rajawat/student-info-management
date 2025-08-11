@extends('layouts.app')
@section('content')
<div class="min-h-[calc(120vh-160px)] bg-gray-100 py-10">
  <!-- Header Image with Students -->
  <div class="relative">
    <img src="image/dance.jpg" alt="Students in Classroom" class="w-full h-64 object-cover rounded-xl shadow-md" />
  </div>

  <!-- Heading -->
  <div class="text-center mt-10">
    <h2 class="text-xl font-bold uppercase tracking-wider text-blue-900">List of News & Events</h2>
    <div class="mt-2 border-b-2 w-24 mx-auto border-pink-500"></div>
  </div>

  <!-- News Cards Grid -->
  <div class="max-w-6xl mx-auto mt-10 px-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 cursor-pointer">
    @foreach($getinfo as $info)
    <!-- Card 1 -->
    <div class="bg-gray-50 shadow p-4 rounded-lg">
      <img src="{{asset('uploads/'.$info->image)}}" alt="Event Image" class="w-full h-48 object-cover rounded" />
      <h3 class="text-md font-semibold mt-4 text-center">{{$info->name}}</h3>
      <div class="text-sm text-gray-600 mt-2 text-center">
        <p>{{$info->created_at}}</p>
        <p>{{$info->title}}</p>
      </div>
    </div>
    @endforeach






  </div>
</div>
@endsection