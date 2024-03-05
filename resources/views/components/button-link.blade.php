@props(['active'])

@php
$classes = ($active ?? false)
            ? 'm-9 font-semibold text-gray-900 hover:text-gray-600 dark:text-gray-600 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 border-2 rounded-lg p-2 border-black'
            : 'm-9 font-semibold text-gray-900 hover:text-gray-600 dark:text-gray-600 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 border-2 rounded-lg p-2 border-black';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
