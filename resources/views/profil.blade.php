<x-layout>
    <x-slot name="header">
        Lucky Feliyanto
    </x-slot>

    <div>
        <img src="{{ asset('images/LF.jpg') }}" alt="profile" class="bg-white h-50 w-50 object-contain rounded-full mb-4">
    </div>



    <div class="flex md:flex-row flex-col">
        <div class="w-full flex-1 md:flex-col md:flex-2/3 mb-2">
            <div class="font-bold">Nama Kandidat</div>
            <div class="shadow-md border-1 mt-2 mr-2 rounded-lg p-2">Lucky Feliyanto</div>
        </div>
        <div class="w-full flex-1 md:flex-col md:flex-1/3 mb-2">
            <div class="font-bold">Posisi Kandidat</div>
            <div class="shadow-md border-1 mt-2 mr-2 rounded-lg p-2">Website Programmer</div>
        </div>
    </div>

</x-layout>
