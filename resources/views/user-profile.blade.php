@extends('layouts.app')
@section('content')

@php $user = auth()->user(); @endphp
<div class="bg-white shadow-lg rounded-lg p-6 w-full max-w-md mx-auto  mt-40">
    <div class="flex flex-col items-center">
        <!-- Profile Image -->
        <div class="w-24 h-24 rounded-full overflow-hidden border border-gray-300 shadow">
            <img src="{{ asset('uploads/' . $user->image) }}"
                alt="Profile"
                class="w-full h-full object-cover cursor-pointer border-b">
                
        </div>
            <a href="{{ url('profile-edit') }}" class="flex items-center gap-3 px-4 py-3 hover:bg-gray-50 text-sm font-semibold text-gray-600">Edit Profile</a>

        <!-- Name & Email -->
       
   
        <div class="mt-2 w-full ml-30 ">
         
        <p class="text-gray-500 mt-2"><strong>UserName : </strong>{{$user->name}}</p>
        <p class="text-gray-500 mt-2"><strong>Email : </strong>{{$user->email}}</p>
        <p class="text-gray-500 mt-2"><strong>Phone : </strong>{{$user->phone}}</p>
 



        </div>

      
    </div>
</div>
@endsection