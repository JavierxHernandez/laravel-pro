<x-layout>
    <x-slot:title>
        Posts - Index
    </x-slot:title>

    {{--<x-slot:meta>
        <meta name="description" content="Listado de posts">
    </x-slot:meta>--}}

    @push('meta')
        <meta name="description" content="Listado de posts">
    @endpush

    <style>
        .color-red {
            color: red;
        }

        .color-blue {
            color: blue;
        }
    </style>

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
    <div class="container">
        <a href="{{ route('posts.create') }}">Create New Posts</a>
        @forelse($posts as $post)
            <ul>
                <li @if($loop->first) style="color:green" @endif
                    @class([
                        'color-red' => $loop->iteration %2 == 0,
                        'color-blue' => $loop->iteration %2 != 0
                        ])>
                    <a href="{{ route('posts.show', $post["id"]) }}">
                        {{ $post['title']
                            ." - Indice: " . $loop->index
                            ." - Iteracion: " .$loop->iteration
                            ." - Faltan: ". $loop->remaining }}
                    </a>
                </li>
            </ul>
        @empty
            <p>No hay nada en el array</p>
        @endforelse
        {{ $posts->links() }}
    </div>

    {{--continue--}}
    {{--@foreach($posts as $post)
        @continue($post['id'] == 2)
        <ul>
            <li>
                {{ $post['title'] }}
            </li>
        </ul>
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
</x-layout>
