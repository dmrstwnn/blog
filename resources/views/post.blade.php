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
    
    


    <a href="/posts" class="py-2 px-3 flex justify-center items-center bg-white mb-5 rounded-full border w-56 gap-3 border-black font-bold hover:shadow-[4px_4px_0px_rgba(0,0,0,1)]">
        <img src="/svg/back.svg" alt="back icon">
        Back to all posts
    </a>
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased rounded-3xl border border-black">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <div class="flex justify-end items-center">
                        <div class="gap-3 flex items-center">
                            <a href="{{ route('articles.edit', $data->id) }}" class="py-2 px-3 flex justify-center items-center bg-transparent rounded-full border w-20 border-black font-bold hover:shadow-[4px_4px_0px_rgba(0,0,0,1)]">
                                <img src="/svg/edit.svg" alt="edit icon">
                            </a>
                            <a href="{{ route('delete', $data->id) }}" class="py-2 px-3 flex justify-center items-center bg-transparent rounded-full border w-20 border-black font-bold hover:shadow-[4px_4px_0px_rgba(0,0,0,1)]">
                               <img src="/svg/delete.svg" alt="delete icon">
                            </a>
                        </div>
                    </div>
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
        
                <p class="text-neutral-500">{{ ($data ['body']) }}</p>
            </article>
        </div>
    </main>

  </x-layout>