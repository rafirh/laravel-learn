@extends('layouts.main')
@section('container')
<h1 class="mb-5">{{ $title }}:</h1>
@foreach ($categories as $category)
    <article class="mb-5">
        <h3><a href="/category/{{ $category->slug }}" class="text-decoration-none">{{ $category->name }}</a></h3>
    </article>
@endforeach
@endsection

