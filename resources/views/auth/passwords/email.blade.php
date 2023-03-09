@extends('layouts.app')

@section('content')
<div class="col-sm-12 sign-in-page-data">
    <div class="sign-in-from bg-primary rounded">
        <h3 class="mb-0 text-white">{{ __('Reset Password') }}</h3>
        <p class="text-white">Enter your email address and we'll send you an email with instructions to reset your password.</p>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('password.email') }}" class="mt-4 form-text">
            @csrf

            <div class="form-group">
                <label for="email">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control mb-0" placeholder="Enter email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            
            <div class="d-inline-block w-100">
                <button type="submit" class="btn btn-white">{{ __('Send Password Reset Link') }}</button>
            </div>

        </form>
    </div>
</div>
@endsection
