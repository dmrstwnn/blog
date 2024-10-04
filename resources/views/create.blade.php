<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h3 class="flex justify-center text-4xl font-semibold p-5">Create Article</h3>
    

<form class="max-w-sm mx-auto" method="POST" action="/addpost" enctype="multipart/form-data">
    @csrf
    <div class="mb-5">
      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
      <input type="text" id="email" class="w-full border-black border-2 p-2.5 outline-none focus:outline-dashed focus:shadow-[4px_4px_0px_rgba(0,0,0,1)] focus:bg-pink-200 active:shadow-[2px_2px_0px_rgba(0,0,0,1)] rounded-md" name="title" required placeholder="Title"/>
    </div>
    <div class="mb-5">
      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Author</label>
      <input type="text" id="password" class="w-full border-black border-2 p-2.5 outline-none focus:outline-none focus:shadow-[4px_2px_0px_rgba(0,0,0,1)] focus:bg-blue-200 active:shadow-[2px_2px_0px_rgba(0,0,0,1)] rounded-md" name="author" required placeholder="Author"/>
    </div>
    <div class="mb-5">    
      <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Profile Author</label>
      <input name="image" accept="jpg.jpeg.image/png.image/jpeg" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
      </div>
    <div class="mb-5">
      <label for="repeat-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Article</label>
      <textarea id="message" rows="4" class="block w-full border-black border-2 p-2.5 outline-none focus:outline-none focus:shadow-[8px_8px_0px_rgba(0,0,0,1)] focus:bg-slate-50 active:shadow-[2px_2px_0px_rgba(0,0,0,1)] rounded-md" name="body" placeholder="make your article"></textarea>
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</button>
  </form>

  </x-layout>