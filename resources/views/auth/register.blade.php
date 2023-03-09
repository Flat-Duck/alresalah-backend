@extends('layouts.app')

@section('content')
<div class="col-sm-12 sign-in-page-data">
    <div class="sign-in-from bg-primary rounded">
        <h3 class="mb-0 text-center text-white">{{ __('Register') }}</h3>
        <p class="text-center text-white">Enter your email address and password to access admin panel.</p>
        <form class="mt-4 form-text" method="POST" action="{{ route('register') }}">
            @csrf
            
            <div class="form-group">
                <label for="name">{{ __('Name') }}</label>
                <input type="text" class="form-control mb-0 @error('name') is-invalid @enderror" id="name" placeholder="Your Full Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="email">{{ __('E-Mail Address') }}</label>
                <input type="email" class="form-control mb-0 @error('email') is-invalid @enderror" name="email" id="email" placeholder="Enter email" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="password">{{ __('Password') }}</label>
                <input type="password" class="form-control mb-0 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" id="password" placeholder="Password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password-confirm" class="form-control mb-0" name="password-confirm" required autocomplete="new-password">                
            </div>
            
            <div class="d-inline-block w-100">
                <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">I accept <a href="#" class="text-light">Terms and Conditions</a></label>
                </div>
            </div>

            <div class="sign-info text-center">
                <button type="submit" class="btn btn-white d-block w-100 mb-2">{{ __('Register') }}</button>
                <span class="text-dark d-inline-block line-height-2">Already Have Account ? <a href="/login" class="text-white">Log In</a></span>
            </div>
        </form>
    </div>
</div>
@endsection
