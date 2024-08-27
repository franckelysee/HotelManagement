<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @yield('styles')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="relative">

    <div class="header w-full  sticky  top-0 z-10">
        {{-- @include('layouts.header') --}}
        @include('layouts.navigation')

    </div>
    <main class=" m-auto ">
        @yield('content')
    </main>


    <script src="{{ asset('js/datepicker/flowbite/dist/flowbite.min.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script> --}}


</body>
</html>
@yield('scripts')


