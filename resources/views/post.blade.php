@extends('layouts.main')
@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2 class="mb-3">{{ $post->title }}</h2>
                <p>By. <a href="/posts?author={{ $post->author->slug }}"
                        class="text-decoration-none">{{ $post->author->name }}</a> in <a
                        href="/posts?category{{ $post->category->slug }}"
                        class="text-decoration-none">{{ $post->category->name }}</a></p>
                @if ($post->image)
                    <div style="max-height: 350px; overflow: hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                            class="img-fluid">
                    </div>
                @else
                    <img src="https://source.unsplash.com/random/1200x400?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}" class="img-fluid">
                @endif
                <article class="my-4 fs-6">
                    {!! $post->body !!}
                </article>
                <p><a href="/posts">Back to posts list</a></p>
            </div>
        </div>
    </div>
@endsection
