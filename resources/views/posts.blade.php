<x-layout>

    @foreach($posts as $post)
        <a href="/posts/{{ $post->slug }}">
            <h1>{{ $post->title }}</h1>
        </a>
        <p>{{ $post->excerpt }}</p>

        <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a><br>
        By <a href="">{{ $post->author->name }}</a>    @endforeach

</x-layout>