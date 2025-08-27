@extends('layouts.app')

@section('content')
<div class="flex h-screen bg-gray-100">

    {{-- Sidebar --}}
    <aside class="w-64 bg-blue-800 text-white flex flex-col">
        <div class="p-6 text-2xl font-bold border-b border-blue-700">
            Student Panel
        </div>
        <nav class="flex-1 p-4 space-y-2">
            <a href="#" class="block px-4 py-2 rounded bg-blue-700">Dashboard</a>
            <a href="#" class="block px-4 py-2 rounded hover:bg-blue-700">My Courses</a>
            <a href="#" class="block px-4 py-2 rounded hover:bg-blue-700">My Profile</a>
            <a href="#" class="block px-4 py-2 rounded hover:bg-red-600">Logout</a>
        </nav>
    </aside>

    {{-- Main Content --}}
    <div class="flex-1 flex flex-col">
        {{-- Topbar --}}
        <header class="bg-white shadow p-4 flex justify-between items-center">
            <h1 class="text-xl font-semibold text-gray-700">Dashboard</h1>
            <div class="flex items-center space-x-4">
                <span class="text-gray-600">Welcome, Student</span>
                <img src="https://ui-avatars.com/api/?name=Student" alt="profile" class="w-10 h-10 rounded-full">
            </div>
        </header>

        {{-- Content --}}
        <main class="flex-1 p-6 overflow-y-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div class="bg-white p-4 rounded-xl shadow">
                    <h2 class="text-gray-600 text-sm">Total Courses</h2>
                    <p class="text-2xl font-bold text-gray-800">5</p>
                </div>
                <div class="bg-white p-4 rounded-xl shadow">
                    <h2 class="text-gray-600 text-sm">Completed Courses</h2>
                    <p class="text-2xl font-bold text-green-600">3</p>
                </div>
                <div class="bg-white p-4 rounded-xl shadow">
                    <h2 class="text-gray-600 text-sm">Pending Courses</h2>
                    <p class="text-2xl font-bold text-yellow-500">2</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
                <h2 class="text-lg font-semibold text-gray-700 mb-4">Welcome to your student dashboard!</h2>
                <p>Here you can see your courses, progress, and profile information.</p>
            </div>
        </main>
    </div>
</div>
@endsection
