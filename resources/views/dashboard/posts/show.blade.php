@extends('dashboard.layouts.main')
@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h2 class="mb-3">{{ $post->title }}</h2>
                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back all my posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Are you sure delete this post?')"><span
                            data-feather="x-circle"></span> Delete</button>
                </form>
                <img src="https://source.unsplash.com/random/1200x400?{{ $post->category->name }}"
                    alt="{{ $post->category->name }}" class="img-fluid mt-3">
                <article class="my-4 fs-6">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
