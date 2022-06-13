@extends('layouts.main')
@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-registration w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
                <form action="/register" method="POST">
                    @csrf
                    <div class="form-floating mb-1">
                        <input type="text" class="form-control @error('name') {{ "is-invalid" }} @enderror" id="name" name="name" placeholder="Name">
                        <label for="name">Full Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-1">
                        <input type="text" class="form-control @error('username') {{ "is-invalid" }} @enderror" id="username" name="username" placeholder="Username">
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror    
                    </div>
                    <div class="form-floating mb-1">
                        <input type="email" class="form-control @error('email') {{ "is-invalid" }} @enderror" id="email" name="email" placeholder="name@example.com">
                        <label for="email">Email Address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-1">
                        <input type="password" class="form-control @error('password') {{ "is-invalid" }} @enderror" id="password" name="password" placeholder="Password">
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror    
                    </div>
                    <button class="w-100 btn btn-lg btn-danger mt-3" type="submit">Register</button>
                </form>
                <small class="text-center d-block mt-4">Already registered? <a href="/login"
                        class="text-decoration-none">Login</a></small>
            </main>
        </div>
    </div>
@endsection
