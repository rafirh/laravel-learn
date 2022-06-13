@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-4">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <main class="form-signin w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
                <form action="/login" method="POST">
                    @csrf
                    <div class="form-floating mb-1">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required autofocus>
                        <label for="email">Email Address</label>
                    </div>
                    <div class="form-floating mb-1">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required >
                        <label for="password">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-danger mt-3" type="submit">Login</button>
                </form>
                <small class="text-center d-block mt-3">Not registered? <a href="/register"
                        class="text-decoration-none">Register now!</a></small>
            </main>
        </div>
    </div>
@endsection
