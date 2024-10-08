<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <article class="py-8 max-w-screen-md ">
    <div class="container"> 
      
    </div>
      <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
    
    <div class="text-base text-gray-500">
      <a href="#">{{ $post['author'] }}</a> | {{ $post->created_at->diffForHumans() }}
    </div>
    <div class="flex ">
      <div class="flex-auto mr-w-96">
        <p class="my-4 font-light">{{($post['body']) }}</p>
      </div>
      <div class="flex-auto w-max m-auto">
        <img src="/image/LOGO HMTIF.png" alt="" class="">
      </div>
    </div>
    <a href="/posts" class="font-medium text-blue-400 hover:underline">Back to Posts &laquo;</a>
    
  </article>

</x-layout>