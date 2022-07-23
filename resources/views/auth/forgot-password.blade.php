@extends('layouts.auth', ['title' => 'Forgot password'])

@section('content')
    <div class="card">
        <div class="card-header">Forgot password </div>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form action="/forgot-password" method="post">
                @csrf

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email"
                        class="form-control @error('email') is-invalid @enderror" required>
                    @error('email')
                        <span class="text-danger d-block mt-1 invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary w-100 mt-3">Get link reset password</button>
            </form>
        </div>
    </div>
@endsection
