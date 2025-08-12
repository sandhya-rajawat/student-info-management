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
            <a href="{{ url('signout') }}" class="bg-red-500 text-white py-1 px-3 rounded hover:bg-red-600 transition">Sign Out</a>
            @else
            <a href="{{ url('signin') }}" class="bg-green-500 text-white py-1 px-3 rounded hover:bg-green-600 transition">Sign In</a>
            @endif
        </div>
    </div>
</header>