@extends('layouts.app')
@section('content')
<div class="relative">
  <img src="{{asset('image/dance.jpg')}}" alt="Students in Classroom" class="w-full h-64 object-cover rounded-xl shadow-md" />
</div>

<div class="p-10  mt-10">
  <div class="max-w-7xl mx-auto">
    <h2 class="text-3xl font-bold mb-6 text-center text-blue-900">Top Tranding News</h2>
    <div class="grid md:grid-cols-3 gap-6">

      @foreach($data as $info )
      <div class="bg-red-50 p-4 rounded-xl shadow-md">
        <img src="{{ asset('uploads/'.$info->image) }}" class="w-full h-40 object-cover rounded-lg mb-4" alt="Blog Image">
        <a href="blog-details">
          <h3 class="text-xl font-semibold mb-2 cursor-pointer">{{$info->title}}</h3>
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

@endsection