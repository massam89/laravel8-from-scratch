<x-layout>
     <h1>{{ $post->title }}</h1>
    <p>{!! $post->body !!}</p>
    <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a><br>
    By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>

    <br>
    <a href="/">back</a>
</x-layout>
   
