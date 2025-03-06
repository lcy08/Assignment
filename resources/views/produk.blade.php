<x-layout>
    <x-slot:header>
        Produk
    </x-slot:header>

    <div class="flex flex-row justify-between">
        {{--First Part --}}
        <div class="flex flex-col md:flex-row justify-start">
            {{-- Search Bar --}}
            <div class="flex flex-col">
                <form action="{{ route('search') }}" method="GET">
                    <input type="text" name="search" placeholder="Search Products" class="rounded-md border-2 border-gray-200 p-2 m-1">
                    <button type="submit" class="m-1 cursor-pointer bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Search</button>
                </form>
            </div>

            {{-- Category --}}
            <div class="flex flex-col ml-6">
                <form action="{{ route('filter') }}" method="GET">
                    <select name="category" class="rounded-md border-2 border-gray-200 p-2 m-1">
                        @foreach ($categories as $category)
                            <option value="{{ $category->category }}">{{ $category->category }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="m-1 cursor-pointer bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Filter</button>
                </form>
            </div>
        </div>

        {{-- Second Part --}}
        <div class="flex flex-col md:flex-row justify-end ">

            {{-- Export Button --}}
            <div class="flex flex-col justify-end">
                <a href="{{ route('export') }}">
                    <button class="m-1 cursor-pointer bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                        <img src="{{ asset('images/MicrosoftExcelLogo.png') }}" alt="Edit" class="h-5 w-5">
                    </button>
                </a>
            </div>

            {{-- Add Button --}}
            <div class="flex flex-col justify-end">
                <a href="{{ route('add') }}">
                    <button class="m-1 cursor-pointer bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                        <img src="{{ asset('images/PlusCircle.png') }}" alt="Edit" class="h-5 w-5">
                    </button>
                </a>

            </div>
        </div>
    </div>

    {{-- Table --}}
    <div class="w-full flex flex-col justify-center tablediv">
        <table class="table-fixed w-full text-center border-2 border-gray-200">

            <thead class="bg-gray-200">
                <tr>
                    <th class="px-6 py-4">Gambar</th>
                    <th class="px-6 py-4">Nama</th>
                    <th class="px-6 py-4">Kategori</th>
                    <th class="px-6 py-4">Harga Beli</th>
                    <th class="px-6 py-4">Harga Jual</th>
                    <th class="px-6 py-4">Stok</th>
                    <th class="px-6 py-4">Actions</th>
                </tr>
            </thead>
            @foreach ($products as $product)
                <tr>
                    <td class="px-6 py-4"><img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="w-10"></td>
                    <td class="px-6 py-4">{{ $product->name }}</td>
                    <td class="px-6 py-4">{{ $product->category }}</td>
                    <td class="px-6 py-4">{{ $product->buy_price }}</td>
                    <td class="px-6 py-4">{{ $product->sell_price }}</td>
                    <td class="px-6 py-4">{{ $product->stock }}</td>

                    <td class="px-6 py-4 flex flex-row justify-center">
                        <a href="{{ route('edit', $product->id) }}">
                            <button class="m-1 cursor-pointer bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                                <img src="{{ asset('images/edit.png') }}" alt="Edit" class="h-5 w-5">
                            </button>
                        </a>
                        <form action="{{ route('destroy', $product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="m-1 cursor-pointer bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                <img src="{{ asset('images/delete.png') }}" alt="Delete" class="h-5 w-5">
                            </button>
                        </form>
                    </td>
                </tr>

            @endforeach


        </table>
        {{ $products->links() }}

    </div>

</x-layout>
