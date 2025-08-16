<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Student Management System')</title>


    @vite('resources/css/app.css')
</head>

<body class="bg-blue-50 text-gray-900 font-sans">


    @include('partials.header')


    <main class="min-h-screen   font-sans bg-blue-50">
        @yield('content')
    </main>


    @include('partials.footer')

</body>

</html>