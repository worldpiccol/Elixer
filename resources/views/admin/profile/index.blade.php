@extends('admin.layouts.app')

@section('title', 'Profile Settings')

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Profile</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Account</a></li>
                    <li class="breadcrumb-item active">Profile settings</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-xl-9 col-lg-8 offset-1">
            <div class="card mt-5">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm order-2 order-sm-1">
                            <div class="d-flex align-items-start mt-3 mt-sm-0">
                                <div class="flex-shrink-0">
                                    <div class="avatar-xl me-3">
                                        <img src="{{ Auth::user()->avarta }}" alt="" class="img-fluid rounded-circle d-block">
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <div>
                                        <h5 class="font-size-16 mb-1">{{ Auth::user()->name }}</h5>
                                        <p class="text-muted font-size-13">Administrator</p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <ul class="nav nav-tabs-custom card-header-tabs border-top mt-4" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link px-3 active" data-bs-toggle="tab" href="#overview" role="tab">Profile Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3" data-bs-toggle="tab" href="#about" role="tab">Password</a>
                        </li>
                    </ul>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->

            <div class="tab-content">
                <div class="tab-pane active" id="overview" role="tabpanel">
                <div class="card mt-4">

                <div class="card-body">
                    <div>
                        <form id="" method="post" action="{{ route('admin.profile.update') }}">
                            @csrf
                            @method('PUT')
                            <input type="hidden"/>
                            <div class="row">
                                <div class="col-xl-4 col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Name</label>
                                        <input type="text" required name="name" class="form-control" value="{{ Auth::user()->name }}" required />
                                    </div>
                                    @error('name')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Username</label>
                                        <input type="text" name="username" class="form-control" value="{{ Auth::user()->username}}" required />

                                    </div>
                                    @error('username')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Email</label>
                                        <input type="text" name="email" required class="form-control"  value="{{ Auth::user()->email }}"/>
                                    </div>
                                    @error('email')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Country</label>
                                        <input type="text" id="pwd" name="country" class="form-control" value="{{ Auth::user()->country }}" />
                                    </div>
                                    @error('country')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="form-group">
                                <button  type="submit" class="btn btn-light">Update Profile</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
            <!-- end tab pane -->

            <div class="tab-pane" id="about" role="tabpanel">

                <div class="card mt-4">

                <div class="card-body">
                    <div>
                        <form id="" method="post" action="{{ route('admin.password.update') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="hidden"/>
                            <div class="row">
                                <div class="col-xl-4 col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Old Password</label>
                                        <input type="password" required name="old_password" class="form-control" placeholder="Enter your current password" required />
                                    </div>
                                    @error('old_password')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="form-group mb-3">
                                        <label>New Password</label>
                                        <input type="password" required name="new_password" class="form-control" placeholder="Enter new password" required />

                                    </div>
                                    @error('new_password')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Confirm Password</label>
                                        <input type="password" required name="new_password_confirmation" class="form-control" placeholder="Confirm new password" required />
                                    </div>

                                </div>
                            </div>
                            <!-- end row -->

                            <div class="form-group">
                                <button  type="submit" class="btn btn-light">Change Password</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            </div>
            <!-- end tab pane -->

        </div>
        <!-- end tab content -->
    </div>
    <!-- end col -->


</div>
<!-- end row -->

@endsection
