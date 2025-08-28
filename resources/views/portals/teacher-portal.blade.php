@include('portals.header-portal')
<div class="flex h-screen bg-gray-100 mt-20">

    {{-- Content --}}
    <main class="flex-1 p-6 overflow-y-auto ">

        {{-- Stats --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6 mt-10">
            <div class="bg-white rounded-xl shadow p-6">
                <h2 class="text-gray-600 text-sm">Total Students</h2>
                <p class="text-2xl font-bold text-gray-800">{{$totalStudents}}</p>
            </div>
            <div class="bg-white rounded-xl shadow p-6">
                <h2 class="text-gray-600 text-sm">Active Students</h2>
                <p class="text-2xl font-bold text-green-600">{{$activeStudents}}</p>
            </div>
            <div class="bg-white rounded-xl shadow p-6">
                <h2 class="text-gray-600 text-sm">Pending Approvals</h2>
                <p class="text-2xl font-bold text-yellow-500">{{$pendingStudents}}</p>
            </div>
        </div>

        {{-- Students Table --}}
        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="text-lg font-semibold text-gray-700 mb-4">Recently Added Students</h2>
            <table class="min-w-full border border-gray-200 rounded-lg overflow-hidden">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">#</th>
                        <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Name</th>
                        <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Email</th>
            
                        <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $recentStudents =$activeStudentdetails->merge($pendingStudentdetails);
                    @endphp
                @foreach($recentStudents as $activeStudent)
                    <tr class="border-t">
                        <td class="px-4 py-2">{{$activeStudent->id}}</td>
                        <td class="px-4 py-2">{{$activeStudent->name}}</td>
                        <td class="px-4 py-2">{{$activeStudent->email}}</td>
                        <!-- <td class="px-4 py-2">10th</td> -->
                        <td class="px-4 py-2">
                            <span class="px-2 py-1 text-xs rounded {{$activeStudent->status=='active' ? 'bg-green-100 text-green-700':'bg-red-100 text-red-700'}} ">{{$activeStudent->status}}</span>
                        </td>
                    </tr>
                    @endforeach
     
                
                    
                </tbody>
            </table>
        </div>

    </main>
</div>