@props(['active' => false])

<li class="{{$active ? 'bg-red-500': 'hover:bg-gray-700'}} text-white-900 hover:bg-gray-200 hover:text-gray-900 focus:outline-none focus:bg-gray-200 focus:text-gray-900 px-2 py-2 rounded-md text-sm font-medium">
    <a href="{{ $attributes->get('href') }}">
        {{ $slot }}
    </a>
</li>
