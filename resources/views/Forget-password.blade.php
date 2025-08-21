@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto mt-55 bg-white p-6 shadow rounded">

    {{-- SUCCESS MESSAGE --}}
    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    {{-- ERROR MESSAGE --}}
    @if($errors->any())
        <div class="bg-red-100 text-red-700 p-2 rounded mb-4">
            <ul class="list-disc pl-5">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h2 class="text-2xl font-bold mb-4">Reset Password</h2>

    <form method="POST" action="{{ url('forget-password/{id}') }}">
        @csrf

       

        <!-- New Password -->
        <div class="mb-4">
            <label class="block text-sm font-medium">New Password</label>
            <input type="password" name="password" required
                class="w-full border rounded px-3 py-2">
        </div>

        <!-- Confirm Password -->
        <div class="mb-4">
            <label class="block text-sm font-medium">Confirm Password</label>
            <input type="password" name="password_confirmation" required
                class="w-full border rounded px-3 py-2">
        </div>

        <button type="submit"
            class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
            Reset Password
        </button>
    </form>
</div>
@endsection
