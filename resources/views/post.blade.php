@extends('layouts.main')
@section('container')
<article class="mb-5">
    <h2 class="mb-5">{{ $post->title }}</h2>
    <p>By. Rafi Rahman in <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    {{-- <h5>By: {{ $post->author }}</h5> --}}
    {!! $post->body !!}
</article>
<a href="/posts">Back to posts list</a>
@endsection