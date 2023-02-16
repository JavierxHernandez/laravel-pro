<x-layout>
    <x-slot:title>
        Posts - Create
    </x-slot:title>
     <h1>Here show the Post Create form:</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div>
            <div>
                <label for="title">Title</label>
                <input type="text" name="title" id="title">
            </div>
            <br>
            <div>
                <label for="slug">Slug</label>
                <input type="text" name="slug" id="slug">
            </div>
            <br>
            <div>
                <label for="body">Body</label>
                <textarea name="body" id="body" cols="30" rows="10"></textarea>
            </div>
            <br>
            <div>
                <button type="submit">Create</button>
            </div>

        </div>
    </form>
</x-layout>

