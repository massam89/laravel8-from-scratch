<x-layout>
     <h1>{{ $post->title }}</h1>
    <p>{!! $post->body !!}</p>
    <a href="#">{{ $post->category->name }}</a>
</x-layout>
   
