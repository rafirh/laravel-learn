@extends('layouts.main')
@section('container')
@foreach ($categories as $category)
    <article class="mb-5">
        <h2><a href="/category/{{ $category->slug }}">{{ $category->name }}</a></h2>
    </article>
@endforeach
@endsection

