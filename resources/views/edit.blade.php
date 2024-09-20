<x-layout>
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="px-4 mx-auto max-w-screen-xl">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Edit Article</h1>
    
            <!-- Display validation errors -->
            @if ($errors->any())
                <div class="bg-red-500 text-white p-4 rounded-md mt-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    
            <!-- Update Article Form -->
            <form method="POST" action="{{ route('articles.update', $data->id) }}" class="mt-8" enctype="multipart/form-data">
                @csrf
                @method('PUT')
    
                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Title</label>
                    <input type="text" id="title" name="title" value="{{ old('title', $data->title) }}" class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 dark:text-white" required>
                </div>
    
                <div class="mb-4">
                    <label for="body" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Body</label>
                    <textarea id="body" name="body" rows="5" class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 dark:text-white" required>{{ old('body', $data->body) }}</textarea>
                </div>
    
                <div class="mb-4">
                    <label for="author" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Author</label>
                    <input type="text" id="author" name="author" value="{{ old('author', $data->author) }}" class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                </div>
    
                <div class="mb-4">
                    <label for="image" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Image</label>
                    <input type="file" accept="jpg.jpeg.image/png.image/jpeg" id="image" name="image" class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                </div>
    
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-500 text-white font-medium rounded-lg hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-700">
                    Update Article
                </button>
            </form>
        </div>
    </main>
</x-layout>