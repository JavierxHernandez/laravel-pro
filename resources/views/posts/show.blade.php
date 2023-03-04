<x-layout>
    <x-slot:title>
        Posts - Show
    </x-slot:title>
    <div class="container mx-auto py-12">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>

        <a class="btn btn-success" href="{{ route('posts.edit', $post) }}">Edit</a>
    </div>
</x-layout>
