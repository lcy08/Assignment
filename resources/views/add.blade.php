<x-layout>
    <x-slot name="header">
        Produk > Add
    </x-slot>
    <div>
        <form action="{{ route('add') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama Produk</label>
                <input type="text" name="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="category" class="block text-gray-700 text-sm font-bold mb-2">Kategori</label>
                <select id="category" name="category" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @foreach ($categories as $category)
                        <option class="w-full" value="{{ $category->category }}">{{ $category->category }}</option>
                    @endforeach
                    <option value="category" selected disabled>Category</option>
                </select>
                <div class="mt-2 p-2 rounded-lg border-2 border-gray-300">
                    Custom Category:
                    <input autocomplete="off" id="category" type="text" name="category" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
            </div>
            <div class="mb-4">
                <label for="buy_price" class="block text-gray-700 text-sm font-bold mb-2">Harga Beli</label>
                <input onkeyup="sellPrice(this)" type="text" name="buy_price" id="buy_price" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"">
            </div>
            <div class="mb-4">
                <label for="sell_price" class="block text-gray-700 text-sm font-bold mb-2">Harga Jual</label>
                <input readonly type="text" name="sell_price" id="sell_price" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight
                focus:outline-none focus:shadow-outline disabled:opacity-75">
            </div>
            <div class="mb-4">
                <label for="stock" class="block text-gray-700 text-sm font-bold mb-2">Stok</label>
                <input type="text" name="stock" id="stock" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="image" class="flex flex-col items-center justify-center w-full h-40 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <img src="{{ asset('images/Image.png') }}" alt="Edit" class="h-25 w-25">
                        Gambar
                    </div>
                    <input onchange="preview()" type="file" name="image" id="image" accept="image/png image/jpeg" class="hidden shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </label>
                <img id="frame" class="w-25 m-4">
            </div>
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    Add
                </button>
            </div>
        </form>
    </div>
    <script>
        function sellPrice(input) {
            const sell_price = document.getElementById('sell_price')
            sell_price.value = input.value * 1.3;
        }

        function preview() {
            frame.src=URL.createObjectURL(event.target.files[0]);
        }
    </script>
</x-layout>
