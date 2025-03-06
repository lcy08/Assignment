<nav class="mt-4">
    <ul class="mt-2">
        <x-nav-item href="{{ route('produk') }}" :active="request()->routeIs('produk')">
            <img src="{{ asset('images/Package.png') }}" alt="logo" class="h-5 w-5"> Produk
        </x-nav-item>
        <x-nav-item href="{{ route('profil') }}" :active="request()->routeIs('profil')">
            <img src="{{ asset('images/User.png') }}" alt="logo" class="h-5 w-5"> Profil
        </x-nav-item>
        <x-nav-item href="{{ route('logout') }}" :active="request()->routeIs('logout')">
            <img src="{{ asset('images/SignOut.png') }}" alt="logo" class="h-5 w-5"> Logout
        </x-nav-item>
    </ul>
</nav>
