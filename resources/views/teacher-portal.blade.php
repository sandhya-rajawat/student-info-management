@extends('layouts.app')
@section('content')


<div class="flex h-screen mt-20">

    {{-- Sidebar --}}
    <aside class="w-64 bg-blue-800 text-white flex flex-col">
        <div class="p-6 text-2xl font-bold border-b border-blue-700">
            Teacher Panel
        </div>
        <nav class="flex-1 p-4 space-y-2">
            <a href="{{ url('/teacher/dashboard') }}" class="block px-4 py-2 rounded hover:bg-blue-700">Dashboard</a>
            <a href="{{ url('/teacher/students') }}" class="block px-4 py-2 rounded hover:bg-blue-700">Manage Students</a>
            <a href="{{ url('/teacher/invite') }}" class="block px-4 py-2 rounded hover:bg-blue-700">Invite Student</a>
            <a href="{{ url('/teacher/profile') }}" class="block px-4 py-2 rounded hover:bg-blue-700">My Profile</a>
            <a href="{{ url('/logout') }}" class="block px-4 py-2 rounded hover:bg-red-600">Logout</a>
        </nav>
    </aside>

    {{-- Main Content --}}
    <main class="flex-1 p-6">
        <section class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white rounded-xl shadow p-6">
                <h2 class="text-xl font-semibold text-gray-700">Total Students</h2>
                <p class="text-3xl font-bold mt-2 text-blue-700">25</p>
            </div>

            <div class="bg-white rounded-xl shadow p-6">
                <h2 class="text-xl font-semibold text-gray-700">Active Invites</h2>
                <p class="text-3xl font-bold mt-2 text-green-600">5</p>
            </div>

            <div class="bg-white rounded-xl shadow p-6">
                <h2 class="text-xl font-semibold text-gray-700">Messages</h2>
                <p class="text-3xl font-bold mt-2 text-red-600">3</p>
            </div>
        </section>

        {{-- Student Table --}}
        <section class="mt-8 bg-white rounded-xl shadow p-6">
            <h2 class="text-xl font-semibold text-gray-700 mb-4">Recently Added Students</h2>
            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-gray-100 text-left">
                        <th class="p-3">Name</th>
                        <th class="p-3">Email</th>
                        <th class="p-3">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td class="p-3">Rahul Sharma</td>
                        <td class="p-3">rahul@student.com</td>
                        <td class="p-3"><span class="text-green-600 font-semibold">Active</span></td>
                    </tr>
                    <tr class="border-b">
                        <td class="p-3">Priya Verma</td>
                        <td class="p-3">priya@student.com</td>
                        <td class="p-3"><span class="text-yellow-600 font-semibold">Pending</span></td>
                    </tr>
                    <tr>
                        <td class="p-3">Amit Kumar</td>
                        <td class="p-3">amit@student.com</td>
                        <td class="p-3"><span class="text-green-600 font-semibold">Active</span></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
</div>
@endsection

