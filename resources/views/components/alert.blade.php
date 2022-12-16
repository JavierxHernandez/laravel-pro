{{--Componente con controlador en app/view/components--}}
<div {{$attributes->merge(['class' => $class])}} role="alert">
    @isset($title)
        <span class="font-medium">{{ Str::upper($title) }}!</span>
        {{ $slot }}
    @else
        <span class="font-medium">Test!</span>
        {{ $slot }}
    @endisset
</div>
