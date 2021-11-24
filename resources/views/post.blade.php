<x-layout>
     <h1>{{ $post->title }}</h1>
    <p>{!! $post->body !!}</p>
    <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
</x-layout>
   
