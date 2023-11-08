@extends('pages.master')
@section('title')
    Home Page
@endsection
@section('content')
    <div class="card" style="width: 90rem;">
        <div class="card-body">
            <h5 class="card-title text-uppercase text-center">Student Dashboard</h5>
            <p class="card-text text-black-50">
                Hello users, I am making student dashboard with laravel framework(PHP). I also Bootstrap, Icons for User
                Interface. But this dashboard is not for UI. It includes backend technology such as Register, Login, Logout,
                Change Password, Email Verify, Forgot Password and API Development.
            </p>
            <a class="btn btn-outline-primary btn-sm" href="{{ route('auth.login') }}">Login</a>
            <a class="btn btn-outline-primary btn-sm" href="{{ route('auth.register') }}">Register</a>
            <a class="btn btn-outline-primary btn-sm" href="{{ route('auth.forgot') }}">Forgot Password</a>
        </div>
    </div>
@endsection
