 @extends('layouts.app')
@section('content')
<div class="flex items-center justify-center max-h-[calc(100vh-120px)] mt-30">
  <form action="{{url('send-email')}}" enctype="multipart/form-data" method="POST" class="bg-white/90 backdrop-blur-sm p-8 rounded-2xl shadow-lg w-full max-w-lg">
    @csrf
    <h2 class="text-2xl font-bold text-blue-800 mb-6 text-center">Enter your email to get OTP</h2>

    <!-- Title -->
    <div class="mb-5">
      <label for="Email" class="block mb-1 text-gray-700 font-medium">Email</label>
      <input type="email" name="email" id="email"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-900"
        placeholder="Enter email..." required>
    </div>
  
   

    <!-- Submit Button -->
    <div class="text-center">
      <button type="submit"
        class="bg-blue-900 hover:bg-blue-800 text-white font-semibold py-2 px-6 rounded-lg shadow-md transition duration-200">
      Send OTP
      </button>
    </div>
  </form>
</div>
@endsection