@vite('resources/css/app.css')
<header class="fixed top-0 z-50 w-full bg-white shadow">
    <div class="flex items-center justify-between px-5 py-2">
        <!-- Logo and Title -->
        <div class="flex items-center gap-3">
            <a href="/">
                <img src="{{ asset('image/logo.png') }}" class="h-12 w-12 rounded-full border border-gray-300 shadow" alt="Logo">
            </a>
            <a href="/">
                <h1 class="text-3xl font-bold text-green-500">𝙎𝙝𝙞𝙠𝙨𝙝𝙖</h1>
            </a>
        </div>
        <!-- Navigation Links -->
        <ul class="flex gap-6 text-lg font-semibold text-gray-800">
            <li>
                <a href="/" class="hover:text-green-500 transition">Home</a>
            </li>

            <!-- Form Dropdown -->
            <li class="relative group cursor-pointer">
                <span class="hover:text-green-500 transition">Form</span>
                <ul class="absolute left-0 hidden group-hover:block bg-white border rounded shadow p-3 w-48 z-10">
                    <li><a href="{{ url('key-features') }}" class="block py-1 px-2 hover:bg-green-100 rounded">Key Features</a></li>
                    <li><a href="{{ url('tourtext') }}" class="block py-1 px-2 hover:bg-green-100 rounded">Tour Text</a></li>
                    <li><a href="{{ url('blog') }}" class="block py-1 px-2 hover:bg-green-100 rounded">Blog</a></li>
                    <li><a href="{{ url('schooltime') }}" class="block py-1 px-2 hover:bg-green-100 rounded">Time</a></li>
                    <li><a href="{{ url('events') }}" class="block py-1 px-2 hover:bg-green-100 rounded">Events</a></li>
                    <li><a href="{{ url('teachers') }}" class="block py-1 px-2 hover:bg-green-100 rounded">Teachers</a></li>
                </ul>
            </li>
            <!-- About School Dropdown -->
            <li class="relative group cursor-pointer">
                <span class="hover:text-green-500 transition">About School</span>
                <ul class="absolute left-0 hidden group-hover:block bg-white border rounded shadow p-3 w-48 z-10">
                    <li>
                        <a href="school-time" class="block py-1 px-2 hover:bg-green-100 rounded">
                            School Timing
                        </a>
                    </li>
                    <li>
                        <a href="school-teachers" class="block py-1 px-2 hover:bg-green-100 rounded">
                            School Teachers
                        </a>
                    </li>
                    <li>
                        <a href="school-events" class="block py-1 px-2 hover:bg-green-100 rounded">
                            School Events
                        </a>
                    </li>
                    <li>
                        <a href="school-blog" class="block py-1 px-2 hover:bg-green-100 rounded">
                            School Blog
                        </a>
                    </li>
            </li>
        </ul>
        </li>
        </ul>
        <!-- Sign In/Out + User Name -->
        <div class="flex items-center gap-4 text-sm">
            @php $user = auth()->user(); @endphp
            @if($user)
            <p class="font-medium text-green-600">{{$user->name}}</p>
            <!-- profile image -->
            <div class="relative group inline-block ">
                <a href="{{ url()->current() }}?menu=open">
                    <img src="{{ asset('uploads/' . $user->image) }}" alt="Profile" class="h-10 w-10 rounded-full border border-gray-300 shadow"></a>

                {{-- Dropdown Menu --}}
                @if(request('menu')==='open')
                <ul class="absolute right-0 mt-2 w-64 bg-gray-100 border rounded-lg shadow-lg p-4 text-center space-y-3">


                    <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">
                        @php
                        $word = collect(explode(' ', $user->name))
                        ->map(fn($word) => strtoupper(mb_substr($word, 0, 1)))
                        ->implode('');
                        @endphp
                        <div class="flex items-center justify-center h-12 w-12 rounded-full bg-gray-500 text-white font-bold text-lg shadow mx-auto">
                            {{ $word }}
                        </div>

                    </li>
                    <li class=" hover:bg-gray-100 cursor-pointer w-10">
                        
                        <p class="font-medium text-sm text-gray-500  break-all w-60 px-2 py-1 rounded">
                            {{$user->email}}
                        </p>
                    </li>
                    <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">
                        <a href="{{ url('signout') }}"
                            class="inline-block bg-red-500 text-white font-semibold py-1 px-4 rounded hover:bg-red-600 transition">
                            Sign Out
                        </a>
                    </li>
                </ul>

                @endif
            </div>
            @else

            <a href="{{ url('signin') }}"
                class="bg-green-500 text-white py-1 px-3 rounded hover:bg-green-600 transition">
                ꜱɪɢɴ ɪɴ
            </a>
            @endif


            </li>


            </ul>
        </div>

    </div>
    </div>
</header>