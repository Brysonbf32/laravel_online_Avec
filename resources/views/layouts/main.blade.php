<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css','resources/css/app.js')
        <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.css">
        <script src="fontawesome-free-6.2.1-web/js/all.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @livewireStyles
    </head>
    <body class="antialiased">
        @yield("content")
        @livewireScripts
    </body>
</html>
