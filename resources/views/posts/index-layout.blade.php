@extends('layouts.app')

@section('title', 'Posts')

@push('meta')
    <meta name="description" content="Listado de posts">
@endpush

@push('meta')
    <meta name="keywords" content="posts, listado">
@endpush

@section('styles')
    <style>
        .color-red {
            color: red;
        }

        .color-blue {
            color: blue;
        }
    </style>
@endsection

@section('header')
    @parent {{-- @parent is used to preserve the header in the layout --}}
    <p>Use the parent heading and add a paragraph</p>
@endsection

@section('content')
    <h2>Here show the posts list:</h2>
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
@endsection
