<x-layout>
    <x-slot:title>
        Posts - Show
    </x-slot:title>

    <h1>Mostrar un post</h1>
    <a href="{{ route('posts.edit', $post) }}">Edit</a>
    {{ $post }}
</x-layout>
