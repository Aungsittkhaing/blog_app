@extends('pages.master')
@section('title')
    Student Login
@endsection
@section('content')
    <div class="row justify-content-center align-items-center min-vh-90">
        <div class="col-5">
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center text-primary">
                        <i class="bi bi-people"></i>
                        Student Login
                    </h4>
                    <hr>

                    <form action="{{ route('auth.check') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="">
                                <i class="bi bi-envelope-fill text-primary"></i>
                                Your Email
                            </label>
                            <input type="email" name="email" value="{{ old('email') }}"
                                class="form-control @error('email')is-invalid @enderror">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">
                                <i class="bi bi-lock-fill text-primary"></i>
                                Your Password
                            </label>
                            <input type="password" name="password" value="{{ old('password') }}"
                                class="form-control @error('password')is-invalid @enderror">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <a href="{{ route('auth.register') }}" class="btn btn-primary btn-sm">Register</a>
                            <button class="btn btn-outline-primary btn-sm">Login</button>
                            <a href="{{ route('auth.forgot') }}" class="btn btn-link">Forgot Password</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
