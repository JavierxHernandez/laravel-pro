<x-layout>
    <x-slot:title>
        Posts - Create
    </x-slot:title>
    <div class="container mx-auto py-12">
        <h1>Here show the Post Create form:</h1>

        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div>
                <div>
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title">
                </div>
                <br>
                <div>
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control" name="slug" id="slug">
                </div>
                <br>
                <div>
                    <label for="body">Body</label>
                    <textarea name="body" class="form-control" id="body" cols="30" rows="10"></textarea>
                </div>
                <br>
                <div>
                    <label for="category_id">Category</label>
                    <select name="category_id" class="form-control" id="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>

            </div>
        </form>
    </div>
</x-layout>

