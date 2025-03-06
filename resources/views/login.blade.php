

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIMS Web App Login</title>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    {{-- Desktop --}}
    <div class="hidden lg:flex">
        <div class="w-full flex">
            <div class="flex-3/5">
                <div class="flex-col flex w-full justify-center items-center h-screen">
                    <img src="{{ asset('images/Handbag.png') }}" alt="logo" class="h-5 w-5 invert">
                    <h1 class="text-2xl font-bold text-center mb-6">SIMS Web App</h1>
                    <form action="#" method="POST" class="w-1/2">
                        @csrf
                        @method('POST')
                        <div class="mb-4">
                            <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username</label>
                            <input type="username" name="username" id="username" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none" placeholder="Your Username">
                        </div>
                        <div class="mb-4">
                            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                            <input type="password" name="password" id="password" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none" placeholder="Your Password">
                        </div>
                        <button type="submit" class="cursor-pointer w-full bg-red-500 text-white p-3 rounded-lg font-semibold">Login</button>
                    </form>
                </div>
            </div>
            <img src="{{ asset('images/Frame 98699.png') }}" alt="sideart" class="flex-2/5 h-screen">
        </div>
    </div>

    {{-- Mobile --}}
    <div class="lg:hidden flex h-screen">
        <div class="flex-col flex w-full justify-center items-center h-screen">
            <img src="{{ asset('images/Handbag.png') }}" alt="logo" class="h-5 w-5 invert">
            <h1 class="text-2xl font-bold text-center mb-6">SIMS Web App</h1>
            <form action="#" method="POST" class="w-1/2">
                <div class="mb-4">
                    <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username</label>
                    <input type="username" name="username" id="username" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none" placeholder="Your Username">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input type="password" name="password" id="password" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none" placeholder="Your Password">
                </div>
                <button type="submit" class="cursor-pointer w-full bg-red-500 text-white p-3 rounded-lg font-semibold">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
