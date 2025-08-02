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

      <!-- Committee Member 1 -->
      <div class="bg-green-100 p-2 rounded-xl shadow-md text-center w-60 cursor-pointer">
        <img src="uploads/member1.jpg" alt="Trustee" class="w-24 h-24 mx-auto rounded-full object-cover mb-2">
        <p class="font-bold">Principal</p>
        <p class="text-gray-600 text-sm">Mrs. Anjali Sharma</p>
        <p class="text-gray-600 text-sm">M.A. B.Ed</p>
      </div>

      <!-- Committee Member 2 -->
      <div class="bg-green-100 p-2 rounded-xl shadow-md text-center w-60 cursor-pointer">
        <img src="uploads/member2.jpg" alt="Trustee" class="w-24 h-24 mx-auto rounded-full object-cover mb-2">
        <p class="font-bold">Vice Principal</p>
        <p class="text-gray-600 text-sm">Mr. Rajeev Mehta</p>
        <p class="text-gray-600 text-sm">M.Sc. B.Ed</p>
      </div>

      <!-- Committee Member 3 -->
      <div class="bg-green-100 p-2 rounded-xl shadow-md text-center w-60 cursor-pointer">
        <img src="uploads/member3.jpg" alt="Trustee" class="w-24 h-24 mx-auto rounded-full object-cover mb-2">
        <p class="font-bold">Coordinator</p>
        <p class="text-gray-600 text-sm">Ms. Priya Kaur</p>
        <p class="text-gray-600 text-sm">M.Com. B.Ed</p>
      </div>

      <!-- Committee Member 4 -->
      <div class="bg-green-100 p-2 rounded-xl shadow-md text-center w-60 cursor-pointer">
        <img src="uploads/member4.jpg" alt="Trustee" class="w-24 h-24 mx-auto rounded-full object-cover mb-2">
        <p class="font-bold">Senior Teacher</p>
        <p class="text-gray-600 text-sm">Mr. Manoj Yadav</p>
        <p class="text-gray-600 text-sm">M.A. M.Ed</p>
      </div>

    </div>
  </div>
</div>

@endsection