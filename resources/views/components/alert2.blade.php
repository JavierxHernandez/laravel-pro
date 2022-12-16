{{--Componentes anónimos --}}
@props(['type' => 'info'])

@php
    $class = match ($type) {
            'danger' => 'p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800',
            'success' => 'p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800',
            'warning' => 'p-4 mb-4 text-sm text-yellow-700 bg-yellow-100 rounded-lg dark:bg-yellow-200 dark:text-yellow-800',
            default => 'p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800',
        };
@endphp

<div {{$attributes->merge(['class' => $class])}} role="alert">
    @isset($title)
        <span class="font-medium">{{ Str::upper($title) }}!</span>
        {{ $slot }}
    @else
        <span class="font-medium">Test!</span>
        {{ $slot }}
    @endisset
</div>
