@extends('layouts.main')
@section('container')
<h1 class="mb-5">Posts Page</h1>
@foreach ($posts as $post)
    <article class="mb-5 border-bottom pb-4">
        <h3><a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h3>
        <p>By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/category/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        <p>{{ $post->excerpt }}</p>
        <a href="/post/{{ $post->slug }}" class="text-decoration-none">Read more...</a>
    </article>
@endforeach
@endsection

