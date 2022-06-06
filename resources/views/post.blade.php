@extends('layouts.main')
@section('container')
<article class="mb-5 border-bottom pb-4">
    <h2 class="mb-5">{{ $post->title }}</h2>
    <p>By. <a href="/author/{{ $post->user->slug }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/category/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
    {{-- <h5>By: {{ $post->author }}</h5> --}}
    {!! $post->body !!}
</article>
<a href="/posts">Back to posts list</a>
@endsection