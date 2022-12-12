<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .color-red{
        color: red;
    }
    .color-blue{
        color: blue;
    }
</style>
<body>
<h1>listado de posts</h1>

{{--<p>{{ $pruebaIndex }}</p>--}}
{{--<p>{{ $pruebaComposer }}</p>--}}
{{--<p>{{ $prueba }}</p>--}}

{{--@isset($posts)
    <p>Esta declarado posts.</p>
@else
    <p>No esta declarado posts.</p>
@endisset

@empty($categories)
    <p>Esta vacio categories.</p>
@else
    <p>No esta vacio categories</p>
@endempty--}}

{{--variables locales--}}
{{--@env('local')
    <p>Estamos en local</p>
@endenv

@env('production')
    <p>Estamos en production</p>
@endenv

@production
    <p>Estamos en production</p>
@endproduction--}}

{{--Switch--}}
{{--@switch($valor)
    @case('a')
        <p>El valor es A</p>
    @break

    @case('e')
        <p>El valor es E</p>
    @break

    @case('i')
        <p>El valor es I</p>
    @break

    @case('o')
        <p>El valor es O</p>
    @break

    @case('u')
        <p>El valor es U</p>
    @break

    @default
        <p>El valor no es bocal</p>
    @break
@endswitch--}}

{{--foreach--}}
{{--@foreach($posts as $post)
    <ul>
        <li>
            {{ $post['title'] }}
        </li>
    </ul>
@endforeach--}}

{{--forelse--}}
@forelse($posts as $post)
    <ul>
        <li @if($loop->first) style="color:green" @endif
            @class([
                'color-red' => $loop->iteration %2 == 0,
                'color-blue' => $loop->iteration %2 != 0
                ])>

            {{ $post['title']
                ." - Indice: " . $loop->index
                ." - Iteracion: " .$loop->iteration
                ." - Faltan: ". $loop->remaining }}
        </li>
    </ul>
@empty
    <p>No hay nada en el array</p>
@endforelse

{{--for--}}
{{--@for($i = 1; $i <= 10; $i++)
    <p>Conteo: {{ $i }}</p>
@endfor--}}

{{--while--}}
{{--@php
    $i = 1;
@endphp
@while($i <= 10)
    <p>{{$i}}</p>

    @php
    $i++;
    @endphp
@endwhile--}}

<script>
    // Como pasar variables php a Js
    let posts1 = {!! json_encode($posts) !!};
    let posts2 = {{ Js::from($posts) }};
    let posts3 = @json($posts);

    console.log(posts3);
</script>
</body>
</html>
