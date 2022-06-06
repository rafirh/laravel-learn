@extends('layouts.main')
@section('container')
    <h1 class="mb-5">Post Category: {{ $category }}</h1>
@foreach ($posts as $post)
    <article class="mb-5">
        <h2><a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>
        <p>By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/category/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        <p>{{ $post->excerpt }}</p>
        <p><a href="/post/{{ $post->slug }}" class="text-decoration-none">Read more...</a></p>
    </article>
@endforeach
@endsection

