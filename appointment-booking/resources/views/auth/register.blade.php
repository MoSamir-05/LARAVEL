@extends('layouts.app')
@section('title', 'Register')

@section('content')
<div class="row justify-content-center mt-4">
    <div class="col-md-5">
        <div class="card p-4">
            <h5 class="text-center mb-4">
                <i class="bi bi-person-plus text-primary me-2"></i>Create Account
            </h5>

            <form action="{{ route('register') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label fw-semibold">Full Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                           value="{{ old('name') }}" placeholder="Rahul Patel">
                    @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                           value="{{ old('email') }}" placeholder="you@example.com">
                    @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                           placeholder="Min. 6 characters">
                    @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control"
                           placeholder="Repeat password">
                </div>

                <button type="submit" class="btn btn-primary w-100">Create Account</button>
            </form>

            <hr>
            <p class="text-center mb-0 small">
                Already have an account?
                <a href="{{ route('login') }}">Login here</a>
            </p>
        </div>
    </div>
</div>
@endsection