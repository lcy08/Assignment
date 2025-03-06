<div {{ $attributes }}>
    <div class="bg-gray-800 p-2 flex justify-end items-center sticky">
        <button id="dropdownButton" class="cursor-pointer flex items-center p-2 relative top-0 right-0 z-50 text-white" onclick="toggleDropdown()">
        <span class="mr-2">Menu</span>
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
    </button>
    </div>
</div>

<!-- Dropdown Menu -->
<div id="dropdownMenu" class="hidden md:hidden fixed inset-0 bg-gray-800 text-white z-50 transition-opacity duration-300 opacity-0">
    <div class="flex flex-col h-full">
        <div class="flex justify-end p-4">
            <button onclick="toggleDropdown()" class="cursor-pointer text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <div class="flex-grow">
            <x-nav-group />
        </div>
    </div>
</div>

<script>
    function toggleDropdown() {
        const dropdownMenu = document.getElementById('dropdownMenu');
        const isHidden = dropdownMenu.classList.contains('hidden');

        if (isHidden) {
            dropdownMenu.classList.remove('hidden');
            dropdownMenu.classList.remove('opacity-0');
            dropdownMenu.classList.add('opacity-100');
        } else {
            dropdownMenu.classList.add('hidden');
            dropdownMenu.classList.remove('opacity-100');
            dropdownMenu.classList.add('opacity-0');
        }
    }
</script>
