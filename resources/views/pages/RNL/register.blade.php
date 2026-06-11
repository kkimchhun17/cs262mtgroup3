@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 75vh;">
    <div class="col-md-6 col-lg-4">
        <div class="card shadow-sm p-4 border-0 bg-light rounded-4">
            <h2 class="text-center mb-4 fw-bold">Registration</h2>
            <form method="POST" action="/register">
                @csrf
                <div class="mb-3">
                    <label class="form-label fw-semibold">Username</label>
                    <input type="text" placeholder="eg.chary" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold">Email</label>
                    <input type="email" placeholder="Example@gmail.com" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label fw-semibold">Password</label>
                    <input type="password" placeholder="******" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Repeat Password</label>
                    <input type="password" placeholder="******" class="form-control" id="password_confirmation" name="password_confirmation" required>
                </div>
                <div class="mb-3">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
                        <label class="form-check-label text-muted" for="terms">Agree to the Terms and Privacy</label>
                    </div>
                </div>
                <div class="d-grid gap-2 mt-4">
                    <button type="submit" class="btn btn-filled btn-lg fs-6 text-light">SignUp</button>
                </div>
                <p class="text-center text-muted mt-3" style="font-size:0.875rem">
                    Already have an account? <a href="/login" style="color:var(--brand-orange)">Log in</a>
                </p>
            </form>
        </div>
    </div>
</div>
@endsection