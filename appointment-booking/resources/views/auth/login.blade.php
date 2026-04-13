@extends('layouts.app')
@section('title', 'Login')

@section('content')
<div class="row justify-content-center mt-4">
    <div class="col-md-5">
        <div class="card p-4">
            <h5 class="text-center mb-4">
                <i class="bi bi-calendar-heart text-primary me-2"></i>AppointBook Login
            </h5>

            <form action="{{ route('login') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label fw-semibold">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                           value="{{ old('email') }}" placeholder="you@example.com">
                    @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Password</label>
                    <input type="password" name="password" class="form-control"
                           placeholder="••••••••">
                </div>

                <div class="mb-4 form-check">
                    <input type="checkbox" name="remember" class="form-check-input" id="remember">
                    <label class="form-check-label" for="remember">Remember me</label>
                </div>

                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>

            <hr>
            <p class="text-center mb-0 small">
                Don't have an account?
                <a href="{{ route('register') }}">Register here</a>
            </p>
        </div>
    </div>
</div>
@endsection