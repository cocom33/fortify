@extends('layouts.auth', ['title' => 'Register'])

@section('content')
    <div class="card">
        <div class="card-header">Register</div>
        <div class="card-body">
            <form action="/register" method="post">
                @csrf

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name"
                        class="form-control @error('name') is-invalid @enderror" required>
                    @error('name')
                        <span class="text-danger d-block mt-1 invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username"
                        class="form-control @error('username') is-invalid @enderror" required>
                    @error('username')
                        <span class="text-danger d-block mt-1 invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email"
                        class="form-control @error('email') is-invalid @enderror" required>
                    @error('email')
                        <span class="text-danger d-block mt-1 invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password"
                        class="form-control @error('password') is-invalid @enderror" required>
                    @error('password')
                        <span class="text-danger d-block mt-1 invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"
                        required>
                </div>

                <button type="submit" class="btn btn-primary w-100 mt-3">Register</button>

                <div class="text-center mt-3">
                    Already have account <a href="/login">Login</a>
                </div>
            </form>
        </div>
    </div>
@endsection
