<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIMS Web App</title>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    {{-- Dropdown Menu for mobile --}}
    <x-dropdown class="lg:hidden sticky w-full" />

    {{-- Full Content --}}
    <div class="flex flex-col md:flex-row min-h-screen">

        {{-- Sidebar Menu for desktop --}}
        <x-sidebar class="hidden lg:flex w-50 bg-gray-800 text-white sticky top-0 " />

        {{-- Main Content --}}
        <main class="main-content w-full bg-gray-100 lg:mt-2 pb-24 lg:pb-5 p-4">
            <header class="mb-5">
                <h1 class="text-3xl font-semibold"> {{ $header }} </h1>
            </header>

            <div>
                {{ $slot }}
            </div>
        </main>
        {{-- Footer --}}

    </div>
    <footer class="w-full bg-gray-800 text-white bottom-0 p-4 flex flex-col items-center content-center">
        <div>
            &copy; 2025 Lucky Feliyanto
        </div>
    </footer>


</body>
</html>
