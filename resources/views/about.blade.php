@extends('layouts.main')
@section('container')
    <h1>This is about page.</h1>
    <h3>{{ $admin['name'] }}</h3>
    <p>{{ $admin['email'] }}</p>
    <img src="img/{{ $admin['photo'] }}" alt="{{ $admin['photo'] }}" width="200" class="img-thumbnail rounded-circle">    
@endsection
