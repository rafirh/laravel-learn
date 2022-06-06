@extends('layouts.main')
@section('container')
<h1 class="mb-5">Post Category:</h1>
@foreach ($authors as $author)
    <article class="mb-5">
        <h3><a href="/author/{{ $author->slug }}" class="text-decoration-none">{{ $author->name }}</a></h3>
    </article>
@endforeach
@endsection
