<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
    


            <!-- Page Heading -->
            @isset($header)
                <header class="flex justify-between items-center px-6 py-4 bg-white/60 shadow-md sticky top-0 backdrop-blur-md z-50">
            <h1 class="text-2xl font-bold text-indigo-600" style="color : #8ABB6C" >LombaKita</h1>
</header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        
    </body>
</html>
