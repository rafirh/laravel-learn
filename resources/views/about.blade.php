@extends('layouts.main')
@section('container')
    <h1>This is about page.</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $photo }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">    
@endsection
