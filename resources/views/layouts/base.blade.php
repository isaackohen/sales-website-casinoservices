<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @hasSection('title')

            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>DAVIDKOHEN - Your Friendly Casino Supplier @yield('title')</title>
        @endif

        <!-- Favicon -->
		<link rel="shortcut icon" href="https://games.cdn4.dk/davidkohen/icon.svg">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/b48909fa3b.js" crossorigin="anonymous"></script>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ url(mix('js/app.js')) }}" defer></script>
        <script src="https://cdn.plyr.io/3.6.9/plyr.js"></script>
        <link rel="stylesheet" href="https://cdn.plyr.io/3.6.9/plyr.css" />
        <script src="https://cdn.jsdelivr.net/hls.js/latest/hls.js"></script>


        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <livewire:header />

    <body class="bg-gray-900">
        @yield('body')

        @livewireScripts

    </body>

    <livewire:footer />
</html>
