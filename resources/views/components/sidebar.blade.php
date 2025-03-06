<aside {{ $attributes }}>
    <div class="bg-gray-800 p-4 justify-end sticky">
        {{-- Logo --}}
        <div class="item-center-mb-4">
            <img src="{{ asset('images/Handbag.png') }}" alt="logo" class="h-5 w-5">
            <span class="text-white text-xl font-semibold">SIMS Web App</span>
        </div>

        {{-- Sidebar --}}
        <x-nav-group class="mt-4"/>
    </div>
</aside>
