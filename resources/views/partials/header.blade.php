@vite('resources/css/app.css')
<header class="fixed top-0 w-full z-50 bg-white/70 backdrop-blur-md shadow-md h-20">
    <div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">
        <!-- Logo -->
        <div class="flex items-center space-x-3">
            <a href="/"> <img src="{{ asset('image/logo.png') }}" alt="Logo" class="h-10" /></a>
            <a href="/">
                <h1 class="text-xl font-bold text-blue-900">𝙎𝙝𝙞𝙠𝙨𝙝𝙖</h1>
            </a>
        </div>

        <!-- Navigation Links  -->
        <nav>
            <ul class="flex space-x-6 text-sm font-medium text-gray-800 gap-20">

                <a href="/">
                    <li class="nav-item nav-dropdown group relative hover:bg-green-500 hover:p-2 hover:rounded-xl hover:text-white  transition duration-100 ease-in-out hover:shadow-lg cursor-pointer">
                        Home

                    </li>
                </a>
                <!-- form -->
                <li class="nav-item nav-dropdown group relative">
                    <span class="nav-link inline-flex  cursor-pointer items-center hover:bg-green-500 hover:p-2 hover:rounded-xl hover:text-white  transition duration-100 ease-in-out hover:shadow-lg">
                        Form
                        <svg class="h-4 w-4 fill-current" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </span>
                    <ul class="nav-dropdown-list hidden group-hover:block lg:invisible lg:absolute lg:block lg:opacity-0 lg:group-hover:visible lg:group-hover:opacity-100 ">

                        <li class="nav-dropdown-item bg-gray-100 p-1  hover:bg-black hover:rounded-xl hover:text-white">
                            <a href="feature" class="nav-dropdown-link">feature</a>
                        </li>
                        <li class="nav-dropdown-item bg-gray-100 p-1  hover:bg-black hover:rounded-xl hover:text-white">
                            <a href="tourtext" class="nav-dropdown-link">tourtext</a>
                        </li>
                        <li class="nav-dropdown-item bg-gray-100 p-1  hover:bg-black hover:rounded-xl hover:text-white">
                            <a href="blog" class="nav-dropdown-link">blog</a>
                        </li>
                        <li class="nav-dropdown-item bg-gray-100 p-1  hover:bg-black hover:rounded-xl hover:text-white">
                            <a href="time" class="nav-dropdown-link">time</a>
                        </li>
                        <li class="nav-dropdown-item bg-gray-100 p-1  hover:bg-black hover:rounded-xl hover:text-white">
                            <a href="events" class="nav-dropdown-link">events</a>
                        </li>
                        <li class="nav-dropdown-item bg-gray-100 p-1  hover:bg-black hover:rounded-xl hover:text-white">
                            <a href="teachers" class="nav-dropdown-link">teachers</a>
                        </li>
                    </ul>
                </li>

                <!-- about section -->
                <li class="nav-item nav-dropdown group relative">
                    <span class="nav-link cursor-pointer inline-flex items-center hover:bg-green-500 hover:p-2 hover:rounded-xl hover:text-white  transition duration-100 ease-in-out hover:shadow-lg">
                        About School
                        <svg class="h-4 w-4 fill-current" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </span>
                    <ul class="nav-dropdown-list hidden group-hover:block lg:invisible lg:absolute lg:block lg:opacity-0 lg:group-hover:visible lg:group-hover:opacity-100 bg-white w-60  ">

                        <li class="nav-dropdown-item w-full bg-gray-100 p-1  hover:bg-black hover:rounded-xl hover:text-white">
                            <a href="school-time" class="nav-dropdown-link">school-time</a>
                        </li>
                        <li class="nav-dropdown-item w-full bg-gray-100 p-1  hover:bg-black hover:rounded-xl hover:text-white">
                            <a href="school-teachers" class="nav-dropdown-link">school-teachers</a>
                        </li>
                        <!-- <li class="nav-dropdown-item w-full bg-gray-100 p-1 hover:bg-black hover:rounded-xl hover:text-white">
                            <a href="teachers_team" class="nav-dropdown-link">Teachers_team</a>
                        </li> -->
                        <!-- <li class="nav-dropdown-item w-60 bg-gray-100 p-1 hover:bg-black hover:rounded-xl hover:text-white">
                            <a href="Head_Department_message" class="nav-dropdown-link">Head-Department-message</a>
                        </li> -->
                        <li class="nav-dropdown-item w-60 bg-gray-100 p-1 hover:bg-black hover:rounded-xl hover:text-white">
                            <a href="school-events" class="nav-dropdown-link">school-events</a>
                        </li>



                    </ul>
                </li>




                <li><a href="#" class=" hover:bg-green-500 hover:p-2 hover:text-white hover:rounded-xl  transition duration-100 ease-in-out hover:shadow-lg">Facilities</a></li>

                <li><a href="#" class=" hover:bg-green-500 hover:p-2 hover:text-white  hover:rounded-xl transition duration-100 ease-in-out hover:shadow-lg">Contact Us</a></li>
                <!-- <li><a href="#" class=" hover:bg-green-500 hover:p-2 hover:text-white  hover:rounded-xl transition duration-100 ease-in-out hover:shadow-lg ">Pre-Primary</a></li> -->
                @if(Session::has('profile'))
                <a href="/signout" class="text-red-500">Sign Out</a>
                @else
                <a href="/signin" class="text-green-500">Sign In</a>
                @endif


            </ul>
        </nav>




    </div>
</header>