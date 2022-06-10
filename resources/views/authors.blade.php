@extends('layouts.main')
@section('container')
    <h1 class="mb-5">Post Category:</h1>
    <div class="conatainer">
        <div class="row">
            @foreach ($authors as $author)
                <div class="col-md-4 mb-5">
                    <a href="/posts?author={{ $author->username }}">
                        <div class="card bg-dark text-white border-0">
                            <img src="https://source.unsplash.com/random/400x300?person"
                                class="card-img" alt="{{ $author->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill p-4 fs-3"
                                    style="background-color: rgba(0, 0, 0, 0.7)">{{ $author->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
