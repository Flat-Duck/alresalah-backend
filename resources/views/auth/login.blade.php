@extends('layouts.app')

@section('content')
<div class="col-sm-12 sign-in-page-data">
    <div class="sign-in-from bg-primary rounded">
        <h3 class="mb-0 text-center text-white">{{ __('Login') }}</h3>
        <p class="text-center text-white">Enter your email address and password to access admin panel.</p>        
        <form method="POST" action="{{ route('login') }}" class="mt-4 form-text">
            @csrf
            <div class="form-group">
                <label for="email">{{ __('E-Mail Address') }}</label>
                <input type="email" name="email" class="form-control mb-0  @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" placeholder="Enter email" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">                
                <label for="password">{{ __('Password') }}</label>                
                @if (Route::has('password.request'))
                    <a class="float-right text-dark" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                <input type="password" name="password" class="form-control mb-0 @error('password') is-invalid @enderror" id="password" placeholder="Password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="d-inline-block w-100">
                <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                    <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="custom-control-label" for="remember"> {{ __('Remember Me') }}</label>
                </div>
            </div>
            <div class="sign-info text-center">
                <button type="submit" class="btn btn-white d-block w-100 mb-2"> {{ __('Login') }}</button>
                <span class="text-dark dark-color d-inline-block line-height-2">Don't have an account? <a href="/register" class="text-white">Sign up</a></span>
            </div>
        </form>
    </div>
</div>
@endsection
