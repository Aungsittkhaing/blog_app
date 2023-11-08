@extends('pages.master')
@section('title')
    Change Password
@endsection
@section('content')
    <div class="row justify-content-center align-items-center min-vh-90 mt-3 p-2">
        <div class="col-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center text-primary">
                        <i class="bi bi-lock"></i>
                        Change Password
                    </h4>
                    <hr>

                    <form action="{{ route('auth.passwordChanging') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="">
                                <i class="bi bi-lock-fill text-primary"></i>
                                Current Password
                            </label>
                            <input type="password" name="current_password" value="{{ old('current_password') }}"
                                class="form-control @error('current_password')is-invalid @enderror">
                            @error('current_password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">
                                <i class="bi bi-lock-fill text-primary"></i>
                                New Password
                            </label>
                            <input type="password" name="password" value="{{ old('password') }}"
                                class="form-control @error('password')is-invalid @enderror">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">
                                <i class="bi bi-lock-fill text-primary"></i>
                                Confirm Password
                            </label>
                            <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}"
                                class="form-control @error('password_confirmation')is-invalid @enderror">
                            @error('password_confirmation')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-outline-primary btn-sm">Change Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
