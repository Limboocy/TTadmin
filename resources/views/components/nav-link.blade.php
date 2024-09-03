@props(['active' => false])

<a class="{{ $active ? 'bg-[#184742] text-white' : 'text-gray-300 hover:bg-[#2E9296]' }} flex items-center p-2 transition duration-75 rounded-lg"
    aria-current="{{ $active ? 'page' : 'false' }}"
    {{ $attributes }}
>
    {{ $slot }}
</a>

