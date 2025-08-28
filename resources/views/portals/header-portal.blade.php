@vite('resources/css/app.css')

<header class="fixed top-0 z-50 w-full bg-gray-800 shadow h-20 ">
    <div class="flex items-center justify-between px-6 py-3">

        {{-- Logo + Title --}}
        <div class="flex items-center gap-3">

            <a href="/">
                <h1 class="text-2xl font-bold text-blue-800">
                    𝐓𝐞𝐚𝐜𝐡𝐞𝐫 𝐏𝐚𝐧𝐞𝐥</h1>
            </a>
        </div>

        {{-- Navigation --}}
        <ul class="flex gap-35 font-semibold text-gray-300">
            <li><a href="/" class="hover:text-blue-500  transition">Dashboard</a></li>
            <li><a href="#" class="hover:text-blue-500  transition">Manage Students</a></li>
            <li><a href="#" class="hover:text-blue-500  transition">Invite Student</a></li>

        </ul>


        {{-- User Section --}}
        <div class="flex items-center gap-4 text-sm">
            @php $user = auth()->user(); @endphp

            @if($user)
            {{-- User Name --}}
            <p class="font-medium text-gray-600">{{ $user->name }}</p>

            {{-- Profile Image --}}
            <a href="{{ url()->current() }}?menu=open">
                <img src="{{ asset('uploads/' . $user->image) }}"
                    alt="Profile" class="h-10 w-10 rounded-full border border-gray-300 shadow cursor-pointer">
            </a>

            {{-- Dropdown Menu (Click-based) --}}

            @if(request('menu') === 'open')
            <!-- <ul class="absolute right-0 bg-white border rounded shadow-lg  w-56 z-20 mt-55 mr-2 "> -->

            <ul class="absolute right-0 bg-white border rounded-lg shadow-lg  border-gray-300 w-80 mt-60 mr-2 z-20 ">


                {{-- Profile Info --}}
                <li class="px-4 py-4 border-b border-gray-300">

                    <div class="flex items-center gap-3">
                        @php
                        $word = collect(explode(' ', $user->name))
                        ->map(fn($w) => strtoupper(mb_substr($w, 0, 1)))
                        ->implode('');
                        @endphp
                        <div class="h-15 w-15 rounded-full bg-gray-300 flex items-center justify-center text-gray-700 text-lg  font-semibold">
                            {{ $word }}
                        </div>
                        <div>
                            <p class="font-medium text-sm">{{ $user->name }}</p>
                            <p class="text-xs text-gray-500 break-all">{{ $user->email }}</p>
                        </div>
                    </div>
                </li>


                <li>
                    <a href="{{ url('profile-edit') }}" class="flex items-center gap-3 px-4 py-1 hover:bg-gray-100 text-sm text-gray-700 ">
                        <img src="{{ asset('image/profile.png') }} " class="w-4">
                        My Profile
                    </a>
                </li>

                {{-- Sign Out --}}
                <li>
                    <a href="{{ url('signout') }}" class="flex items-center gap-3 px-4 py-3 hover:bg-gray-50 text-sm font-semibold text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7" />
                        </svg>
                        Log out
                    </a>
                </li>
            </ul>
            @endif
            @else
            {{-- Sign In --}}
            <a href="{{ url('signin') }}" class="bg-blue-500 text-white py-1 px-3 rounded hover:bg-green-600 transition">
                ꜱɪɢɴ ɪɴ
            </a>
            @endif
        </div>
    </div>
</header>