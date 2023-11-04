@extends('pages.master')
@section('title')
    Verify
@endsection
@section('content')
    <div class="row justify-content-center align-items-center min-vh-90">
        <div class="col-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center text-info">
                        <i class="bi bi-check2-circle"></i>
                        Verify Your Account
                    </h4>
                    <hr>

                    <form action="{{ route('auth.verifying') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="">
                                <i class="bi bi-6-circle text-info"></i>
                                Verify Codes
                            </label>
                            <input type="text" name="verify_code" value="{{ old('verify_code') }}"
                                class="form-control @error('verify_code')is-invalid @enderror">
                            @error('verify_code')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-outline-info btn-sm">Account Verify</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
