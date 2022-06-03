@extends('layouts.main')
@section('container')
<article>
    <h2>{{ $post->title }}</h2>
    <h5>Category: <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
    {{-- <h5>By: {{ $post->author }}</h5> --}}
    {!! $post->body !!}
</article>
<a href="/posts">Back to posts list</a>
@endsection