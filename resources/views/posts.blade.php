@extends('layouts.main')
@section('container')
<h1>Posts Page</h1>
@foreach ($posts as $post)
    <article class="mb-5">
        <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
        <p>By. Rafi Rahman in <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        <p>{{ $post->excerpt }}</p>
    </article>
@endforeach
@endsection

