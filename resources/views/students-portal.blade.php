@extends('layouts.app')

@section('content')
<div class="flex h-screen bg-gray-100">

    {{-- Sidebar --}}
    <aside class="w-64 bg-blue-800 text-white flex flex-col">
        <div class="p-6 text-2xl font-bold border-b border-blue-700">
            Teacher Panel
        </div>
        <nav class="flex-1 p-4 space-y-2">
            <a href="#" class="block px-4 py-2 rounded bg-blue-700">Dashboard</a>
            <a href="#" class="block px-4 py-2 rounded hover:bg-blue-700">Manage Students</a>
            <a href="#" class="block px-4 py-2 rounded hover:bg-blue-700">Invite Student</a>
            <a href="#" class="block px-4 py-2 rounded hover:bg-blue-700">My Profile</a>
            <a href="#" class="block px-4 py-2 rounded hover:bg-red-600">Logout</a>
        </nav>
    </aside>

    {{-- Main Content --}}
    <main class="flex-1 p-6 overflow-y-auto">

        {{-- Stats --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <div class="bg-white rounded-xl shadow p-6">
                <h2 class="text-xl font-semibold text-gray-700">Total Students</h2>
                <p class="text-3xl font-bold mt-2 text-blue-700">120</p>
            </div>

            <div class="bg-white rounded-xl shadow p-6">
                <h2 class="text-xl font-semibold text-gray-700">Active Students</h2>
                <p class="text-3xl font-bold mt-2 text-green-600">98</p>
            </div>

            <div class="bg-white rounded-xl shadow p-6">
                <h2 class="text-xl font-semibold text-gray-700">Pending Approvals</h2>
                <p class="text-3xl font-bold mt-2 text-yellow-500">22</p>
            </div>
        </div>

        {{-- Students Table --}}
        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="text-xl font-semibold text-gray-700 mb-4">Recently Added Students</h2>
            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-gray-100 text-left">
                        <th class="p-3">Name</th>
                        <th class="p-3">Email</th>
                        <th class="p-3">Class</th>
                        <th class="p-3">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td class="p-3">Rahul Sharma</td>
                        <td class="p-3">rahul@student.com</td>
                        <td class="p-3">10th</td>
                        <td class="p-3"><span class="text-green-600 font-semibold">Active</span></td>
                    </tr>
                    <tr class="border-b">
                        <td class="p-3">Priya Verma</td>
                        <td class="p-3">priya@student.com</td>
                        <td class="p-3">9th</td>
                        <td class="p-3"><span class="text-yellow-600 font-semibold">Pending</span></td>
                    </tr>
                    <tr>
                        <td class="p-3">Amit Kumar</td>
                        <td class="p-3">amit@student.com</td>
                        <td class="p-3">8th</td>
                        <td class="p-3"><span class="text-green-600 font-semibold">Active</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </main>
</div>
@endsection
