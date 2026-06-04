@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="col-lg-8">
        <h1 class="mt-5 d-flex justify-content-center">Registration</h1>
        <div class="container my-3 d-flex justify-content-center">
            <form class="w-50">
                <div class="mb-3">
                    <label for="exampleInputUsername" class="form-label">Username</label>
                    <input type="" class="form-control" id="exampleInputUsername">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label>Repeat Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword2">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Agree to the TERM</label>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>
@endsection