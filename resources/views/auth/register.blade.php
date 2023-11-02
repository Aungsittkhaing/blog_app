@extends('pages.master')
@section('title')
    Student Register
@endsection
@section('content')
    <div class="row justify-content-center align-items-center min-vh-95">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center text-info">
                        <i class="bi bi-people"></i>
                        Student Register
                    </h4>
                    <hr>

                    <form action="{{ route('auth.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="">
                                <i class="bi bi-person-fill text-info"></i>
                                Your Name
                            </label>
                            <input type="text" class="form-control @error('name')is-invalid @enderror" name="name"
                                value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">
                                <i class="bi bi-envelope-fill text-info"></i>
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
                                <i class="bi bi-lock-fill text-info"></i>
                                Your Password
                            </label>
                            <input type="password" name="password"
                                class="form-control @error('password')is-invalid @enderror">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">
                                <i class="bi bi-lock-fill text-info"></i>
                                Your Confirm Password
                            </label>
                            <input type="password" name="password_confirmation"
                                class="form-control @error('password_confirmation')is-invalid @enderror">
                            @error('password_confirmation')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-info btn-sm">Register</button>
                            <a href="{{ route('auth.login') }}" class="btn btn-outline-info btn-sm">Sign In</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
