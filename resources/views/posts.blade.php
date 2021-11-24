<x-layout>

    @foreach($posts as $post)
        <a href="/posts/{{ $post->slug }}">
            <h1>{{ $post->title }}</h1>
        </a>
        <p>{{ $post->excerpt }}</p>

        <a href="#">{{ $post->category->name }}</a>
    @endforeach

</x-layout>