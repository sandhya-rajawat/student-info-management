@extends('layouts.app')
@section('content')

<div class="w-full pt-18">
  <img src="image/teacher.png" alt="School Timings" class="w-full h-64 object-cover">
</div>

<!-- Background Section -->
<div class="bg-gray-100 py-10">

  <!-- Heading -->
  <div class="text-center mb-10">
    <h2 class="text-3xl font-bold uppercase text-blue-900">The School Committee</h2>
    <p class="text-blue-900 mt-2 italic">“The Pillars of our Institution”</p>
  </div>

  <div class="max-w-6xl mx-auto space-y-4 px-4">

    <div class="grid md:grid-cols-4 gap-4 justify-center">
      @foreach($data as $info)
      <!-- Committee Member 1 -->
      <div class="bg-green-100 p-2 rounded-xl shadow-md text-center w-60 cursor-pointer">
        <img src="{{asset('uploads/'.$info->image)}}" alt="Trustee" class="w-24 h-24 mx-auto rounded-full object-cover mb-2">
        <p class="font-bold">{{$info->name}}</p>
        <p class="text-gray-600 text-sm">{{$info->education}}</p>
        <p class="text-gray-600 text-sm">{{$info->possition}}</p>
      </div>





      @endforeach

    </div>
  </div>
</div>

@endsection