@extends('layouts.main')

@section('container')
    <h1>Halaman Post</h1>
    @foreach ($posts as $post)
    <article class="mb-5 border-bottom pb-4">
        <h2><a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>
            <p>By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ 
            $post->category->slug }}">{{ $post->category->name }}</a></p>
        <p>{{ $post->excrpt }}</p>

        <a href="/posts/{{ $post->slug }}">Read more..</a>

    </article>
    @endforeach
@endsection
