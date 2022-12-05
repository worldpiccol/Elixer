@extends('auth.layouts.app')

@section('title', 'Register')

@section('content')

<div class="auth-content my-auto">
    <div class="text-center">
        <h5 class="mb-0">Register Account</h5>
        <p class="text-muted mt-2">Get your free {{ config('app.name') }} account now.</p>
    </div>
    <form class="needs-validation mt-4 pt-2" novalidate method="POST" action="{{ route('register') }}" >
        @csrf
        <div class="mb-3">
            <label for="username" class="form-label">Legal Name</label>
            <input type="text" name="name" class="form-control" id="username" placeholder="Enter name" value="{{ old('name') }}" required autofocus>
            <div class="invalid-feedback">
                Please Enter Your Legal Name
            </div>
            @error('name')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="useremail" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="useremail" placeholder="Enter email" value="{{ old('email') }}" required>
            <div class="invalid-feedback">
                Please Enter Email
            </div>
             @error('email')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
         <div class="mb-3">
            <label for="useremail" class="form-label">Gender</label>
            <select class="form-control" name="gender" id="" required>
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="fmale">Female</option>
            </select>
             @error('gender')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="Enter username" value="{{ old('username') }}" required>
            <div class="invalid-feedback">
                Please Enter Username
            </div>
            @error('username')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div> --}}

        <div class="mb-3">
            <label for="userpassword" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="userpassword" placeholder="Enter password" required>
            <div class="invalid-feedback">
                Please Enter Password
            </div>
            @error('password')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="userpassword" class="form-label">Password Confirmation</label>
            <input type="password" name="password_confirmation" class="form-control" id="userpassword" placeholder="Confirm password" required>
            <div class="invalid-feedback">
                Please Confirm Password
            </div>
        </div>
        <div class="mb-4">
            <p class="mb-0">By registering you agree to the {{ config('app.name') }} <a href="#" class="text-primary">Terms and Conditions.</a></p>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Register</button>
        </div>
    </form>


    <div class="mt-5 text-center">
        <p class="text-muted mb-0">Already have an account ? <a href="auth-login.html"
                class="text-primary fw-semibold"> Login </a> </p>
    </div>
</div>

@endsection
