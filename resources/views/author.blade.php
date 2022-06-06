@extends('layouts.main')
@section('container')
<h1 class="mb-5">Author Name: {{ $name }}</h1>
    @foreach ($posts as $post)
    <article class="mb-5 border-bottom pb-4">
        <h2 class="">{{ $post->title }}</h2>
        <p>By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/category/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        {{-- <h5>By: {{ $post->author }}</h5> --}}
        {!! $post->body !!}
    </article>
    @endforeach
@endsection