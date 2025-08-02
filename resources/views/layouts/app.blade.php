<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Student Management System')</title>


    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-900 font-sans">

 
    @include('partials.header')

    {{-- Page Content --}}
    <main class="min-h-screen py-8 px-4">
        @yield('content')
    </main>


    @include('partials.footer')

</body>
</html>
