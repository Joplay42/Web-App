@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center text-blue font-bold justify-center bg-gray-100 w-full h-40'
            : 'inline-flex items-center justify-center bg-white w-full h-40';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    <span class="transition ease-in-out duration-300 hover:scale-125 hover:text-blue">{{ $slot }}</span>
</a>
