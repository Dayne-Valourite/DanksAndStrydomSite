<!DOCTYPE html>
<html class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- <link rel="shortcut icon" href="{{ asset('storage/images/icons/Hydraulics_Icon.png') }}"> --}}

    {{-- common scripts --}}
    @vite('resources/css/app.css')
</head>
<body class="h-full">
    {{ $slot }}
</body>
</html>