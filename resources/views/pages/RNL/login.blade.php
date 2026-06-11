@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 75vh;">
    <div class="col-md-6 col-lg-4">
        <div class="card shadow-sm p-4 border-0 bg-light">
            <h2 class="text-center mb-4 fw-bold">Login</h2>
            <form method="POST" action="/login">
                @csrf
                <div class="mb-3">
                    <label class="form-label fw-semibold">Username</label>
                    <input type="text" placeholder="eg.chary" class="form-control @error('loginname') is-invalid @enderror" id="loginname" name="loginname" required>
                    @error('loginname')
                        <span class="invalid" role="alert">
                            <strong class="text-danger fs-6">username or password is incorrect</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Password</label>
                    <input type="password" placeholder="******" class="form-control @error('loginname') is-invalid @enderror" id="loginpassword" name="loginpassword" required>
                </div>
                <div class="mb-3">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label text-muted" for="remember">Remember Me</label>
                    </div>
                </div>
                <div class="d-grid gap-2 mt-4">
                    <button type="submit" class="btn btn-filled btn-lg fs-6 text-light">Login</button>
                </div>
                <p class="text-center text-muted mt-3" style="font-size:0.875rem">
                    Don't have an account? <a href="/register" style="color:var(--brand-orange)">Sign up</a>
                </p>
            </form>
        </div>
    </div>
</div>
@endsection