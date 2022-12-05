@extends('auth.layouts.app')

@section('title', 'Login')

@section('content')

<div class="text-center">
    <h5 class="mb-0">Welcome Back !</h5>
    <p class="text-muted mt-2">Sign in to continue</p>
</div>
<form class="mt-4 pt-2" novalidate method="post" action="{{ route('login') }}">
    @csrf
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="text" name="email" class="form-control" id="username" placeholder="Enter username" required value="{{ old('email') }}">
        @error('email')
            <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mb-3">
        <div class="d-flex align-items-start">
            <div class="flex-grow-1">
                <label class="form-label">Password</label>
            </div>
            <div class="flex-shrink-0">
                <div class="">
                    <a href="{{ route('password.request') }}" class="text-muted">Forgot password?</a>
                </div>
            </div>
        </div>

        <div class="input-group auth-pass-inputgroup">
            <input type="password" name="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon" required>
            <button class="btn btn-light shadow-none ms-0" type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
        </div>
            @error('password')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
    </div>
    <div class="row mb-4">
        <div class="col">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember-check">
                    Remember me
                </label>
            </div>
        </div>

    </div>
    <div class="mb-3">
        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log In</button>
    </div>
</form>

<div class="mt-5 text-center">
    <p class="text-muted mb-0">Don't have an account ? <a href="{{ route('register') }}"
            class="text-primary fw-semibold"> Signup now </a> </p>
</div>

@endsection
