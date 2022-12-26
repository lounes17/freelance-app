<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">  
        <script defer src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js"></script>  
        <style>
            [x-cloak] { display: none !important; }
        </style>  


        <!-- Scripts -->
                @livewireStyles
    </head>
    <body class="font-sans antialiased">
       @include('partials.navbar')
       <livewire:flash />
       @yield('content')
       @include('partials.footer')
       @livewireScripts
       <script src="../path/to/flowbite/dist/flowbite.js"></script>
       <script src="/js/alpine.js" ></script>

    </body>
</html>
