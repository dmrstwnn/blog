<x-layout>
    {{-- <x-slot:title>{{ $title }}</x-slot:title> --}}


        
    {{-- <article class="py-8 max-w-screen-md ">

        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $data['title'] }}</h2>
 
        <div class="text-base text-gray-500">
            <a href="#">{{ $data['author'] }}</a> | 1 January 2021
        </div>
        <p class="my-4 font-light">{{ $data['body'] }}</p>
            <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to posts</a>
    </article> --}}
    
    


    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <a href="/posts" class="font-medium text-sm text-blue-500 hover:underline">&laquo; Back to all posts</a>
                    <address class="flex items-center my-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full" src="{{ $data->image }}" alt="Jese Leos">
                            <div>
                                <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white"> {{ $data->author }}</a>
                                <p class="text-base text-gray-500 dark:text-gray-400">{{ $data->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                    </address>
                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $data->title }}</h1>
                </header>
        
                <p>{{ ($data ['body']) }}</p>
            </article>
        </div>
    </main>
    
    <a href="{{ route('articles.edit', $data->id) }}" class="inline-flex items-center px-4 py-2 bg-blue-500 text-white font-medium rounded-lg hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-700 mt-4">
        Edit Article
    </a>
    <a href="{{ route('delete', $data->id) }}" class="inline-flex items-center px-4 py-2 bg-blue-500 text-white font-medium rounded-lg hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-700 mt-4">
        hapus 
    </a>

  </x-layout>