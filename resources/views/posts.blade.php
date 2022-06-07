@extends('layouts.main')
@section('container')
    <h1 class="mb-5">{{ $title }}</h1>
    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/random/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top"
                alt="...">
            <div class="card-body text-center">
                <h5 class="card-title text-decoration-none text-dark"><a href="/post/{{ $posts[0]->slug }}"
                        class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h5>
                <p>
                    <small class="text-muted">
                        By. <a href="/authors/{{ $posts[0]->author->username }}"
                            class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a
                            href="/category/{{ $posts[0]->category->slug }}"
                            class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
            </div>
        </div>
    @else
        <p class="text-center fs-4">Post not found.</p>
    @endif
    @foreach ($posts->skip(1) as $post)
        <article class="mb-5 border-bottom pb-4">
            <h3><a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h3>
            <p>By. <a href="/authors/{{ $post->author->username }}"
                    class="text-decoration-none">{{ $post->author->name }}</a> in <a
                    href="/category/{{ $post->category->slug }}"
                    class="text-decoration-none">{{ $post->category->name }}</a></p>
            <p>{{ $post->excerpt }}</p>
            <a href="/post/{{ $post->slug }}" class="text-decoration-none">Read more...</a>
        </article>
    @endforeach
@endsection
