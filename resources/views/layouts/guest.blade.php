<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans bg-blue">
        <div class="lg:grid lg:grid-cols-2 items-center relative">
            <div class="min-h-screen bg-white"> <!-- Updated class: flex-col -->
                <a href="/" class="">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
                <div class="max-w-lg mx-auto mt-40">
                    <div class="text-center">
                        <h1 class=" font-bold">Sign-up</h1>
                        <p class="mb-10">Commencer dès maintenant a prendre un rendez-vous!</p>
                    </div>
                    <div class="px-6 py-4 bg-white shadow-xl overflow-hidden sm:rounded-lg">
                        {{ $slot }}
                    </div>
                </div>
            </div>
            <div class="hidden lg:block">
                <div class="absolute bottom-0 -z-10 w-96 h-96" style="background-image: radial-gradient(rgba(255, 255, 255, 0.24) 2px, transparent 2px);background-size: 30px 30px;background-color: rgba(71, 212, 255, 0);"></div>
                <div class="absolute top-0 right-0 -z-10 w-80 h-60" style="background-image: radial-gradient(rgba(255, 255, 255, 0.24) 2px, transparent 2px);background-size: 30px 30px;background-color: rgba(71, 212, 255, 0);"></div>
                <img src="{{asset('Images/Signup.png')}}" alt="" class="w-[40rem] mx-auto">
            </div>
        </div>
    </body>


</html>
