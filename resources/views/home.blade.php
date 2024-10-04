<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  {{-- <x-header>Home page</x-header> --}}

  <div class="min-h-screen">
    <div class="flex justify-center">
      <img src="blog.svg" alt="blog">
    </div>
    <div class="text-center flex justify-center flex-col">
      <p class="text-6xl mt-10"><span class="font-bold">Your</span>Article</p>
      <div class="font-light text-gray-500 sm:text-xl dark:text-gray-400 mt-5">
        <p class="text-xl">Tempat dimana pemikiran dan inspirasi bersatu.</p>
        <p class="text-xl">Temukan artikel, cerita, dan panduan yang akan memperkaya wawasanmu.</p> 
      </div>
        
      <div class="mt-10 flex justify-center text-center">
        <a href="/posts" class="py-2 text-white bg-red-500 hover:bg-red-600 active:bg-red-700 rounded-full border w-36 border-black font-bold hover:shadow-[4px_4px_0px_rgba(0,0,0,1)]">
          Lihat Blog
        </a>
      </div>
    </div>
  </div>
</x-layout>