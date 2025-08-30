@include('portals.header-portal')

<div class="flex h-screen bg-gray-100 mt-20">
    <main class="flex-1 p-6 overflow-y-auto">
        <div class="bg-white p-6 rounded-xl shadow max-w-xl mx-auto mt-10">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Invite New Student</h2>

            {{-- Success Message --}}
            @if(session('success'))
                <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
                    <p class="font-semibold">{{ session('success') }}</p>
                  
                </div>
            @endif

            {{-- Invite Form --}}
            <form class="space-y-5" action="{{ url('/invite') }}" method="post">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">Student Name</label>
                    <input type="text" name="name"
                           class="w-full border border-gray-300 rounded-md shadow-sm px-4 py-2 focus:ring focus:ring-blue-200"
                           placeholder="Enter student name">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">Student Email</label>
                    <input type="email" name="email"
                           class="w-full border border-gray-300 rounded-md shadow-sm px-4 py-2 focus:ring focus:ring-blue-200"
                           placeholder="Enter student email">
                </div>

                <div class="text-right">
                    <button type="submit"
                            class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded">
                        Send Invite
                    </button>
                </div>
            </form>
        </div>
    </main>
</div>
