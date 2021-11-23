@extends('layout')

@section('banner')
    <h1>My website</h1>
@endsection

@section('content')
    @foreach($posts as $post)
        <a href="/posts/{{ $post->slug }}">
            <h1>{{ $post->title }}</h1>
        </a>
        <p>{{ $post->excerpt }}</p>
    @endforeach
@endsection