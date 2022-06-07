@extends('layouts.main')
@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="mb-5">{{ $post->title }}</h2>
                <p>By. <a href="/authors/{{ $post->author->slug }}"
                        class="text-decoration-none">{{ $post->author->name }}</a> in <a
                        href="/category/{{ $post->category->slug }}"
                        class="text-decoration-none">{{ $post->category->name }}</a></p>
                {!! $post->body !!}
                <p><a href="/posts">Back to posts list</a></p>
            </div>
        </div>
    </div>
@endsection
