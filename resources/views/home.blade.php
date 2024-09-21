<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  {{-- <x-header>Home page</x-header> --}}

  <div class="min-h-screen">
    <div class="text-center flex justify-center flex-col">
      <p class="text-6xl mt-10">Selamat Datang, <span class="font-bold">Damar</span></p>
      <p class="text-xl mt-5">tempat di mana pemikiran dan inspirasi bersatu.</p>
      <p class="text-xl">Temukan artikel, cerita, dan panduan yang akan memperkaya wawasanmu.</p> 
      <p class="text-xl">Aku Jamet.</p> 
  
      <div class="mt-10 flex justify-center text-center">
        <a href="/posts" class="py-2 bg-transparent rounded-full border w-36 border-black hover:bg-black hover:text-white font-bold">
          Lihat Blog
        </a>
      </div>
    </div>
  </div>
</x-layout>