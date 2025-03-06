<x-layout>
    <x-slot name="header">
        John Doe
    </x-slot>
    <img src="{{ asset('images/Frame 98700.png') }}" alt="profile" class="h-50 w-50 mb-5">

    <div class="flex md:flex-row flex-col">
        <div class="w-full flex-1 md:flex-col md:flex-2/3 mb-2">
            <div class="font-bold">Nama Kandidat</div>
            <div class="shadow-md border-1 mt-2 mr-2 rounded-lg p-2">John Doe</div>
        </div>
        <div class="w-full flex-1 md:flex-col md:flex-1/3 mb-2">
            <div class="font-bold">Posisi Kandidat</div>
            <div class="shadow-md border-1 mt-2 mr-2 rounded-lg p-2">Website Programmer</div>
        </div>
    </div>

</x-layout>
