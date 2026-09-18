@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-2 pt-1 border-b-2 border-white text-base font-semibold leading-5 text-white focus:outline-none transition duration-150 ease-in-out'
            : 'inline-flex items-center px-2 pt-1 border-b-2 border-transparent text-base font-medium leading-5 text-blue-200 hover:text-white hover:border-blue-300 focus:outline-none focus:text-white focus:border-blue-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
