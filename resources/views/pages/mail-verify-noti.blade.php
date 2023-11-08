@user
    @if (is_null(session('auth')->email_verified_at))
        <div class="alert alert-info mt-3 p-2">
            Verify your Account <a href="{{ route('auth.verify') }}" class="alert-link">Here</a>
        </div>
    @endif
@enduser
