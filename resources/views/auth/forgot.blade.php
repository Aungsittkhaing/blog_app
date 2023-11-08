@extends('pages.master')
@section('title')
    Forgot Password
@endsection
@section('content')
    <div class="row justify-content-center align-items-center min-vh-90">
        <div class="col-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center text-primary">
                        <i class="bi bi-check2-circle"></i>
                        Forgot Password
                    </h4>
                    <hr>

                    <form action="{{ route('auth.checkEmail') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="">
                                <i class="bi bi-envelope-fill text-primary"></i>
                                Enter Your Email
                            </label>
                            <input type="email" name="email" value="{{ old('email') }}"
                                class="form-control @error('email')is-invalid @enderror">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-outline-primary btn-sm">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
