<?php $__env->startSection('title', 'Profile Settings'); ?>

<?php $__env->startSection('content'); ?>
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Profile</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Account</a></li>
                    <li class="breadcrumb-item active">Password settings</li>
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
                                        <img src="<?php echo e(Auth::user()->avarta); ?>" alt="" class="img-fluid rounded-circle d-block">
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <div>
                                        <h5 class="font-size-16 mb-1"><?php echo e(Auth::user()->name); ?></h5>
                                        <p class="text-muted font-size-13">UID<?php echo e(Auth::user()->user_id); ?></p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <ul class="nav nav-tabs-custom card-header-tabs border-top mt-4">
                        <li class="nav-item">
                            <a class="nav-link px-3" href="<?php echo e(route('user.account.profile')); ?>" >Profile Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3 active" href="<?php echo e(route('user.account.password')); ?>" >Password</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3" href="<?php echo e(route('user.account.wallets')); ?>" >Withdraw Wallets</a>
                        </li>
                    </ul>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->

            <div class="card mt-4">

                <div class="card-body">
                    <div>
                        <form id="" method="post" action="<?php echo e(route('user.password.update')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <input type="hidden"/>
                            <div class="row">
                                <div class="col-xl-4 col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Old Password</label>
                                        <input type="password" required name="old_password" class="form-control" placeholder="Enter your current password" required />
                                    </div>
                                    <?php $__errorArgs = ['old_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="form-group mb-3">
                                        <label>New Password</label>
                                        <input type="password" required name="new_password" class="form-control" placeholder="Enter new password" required />

                                    </div>
                                    <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
    <!-- end col -->


</div>
<!-- end row -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH S:\jobs\bitstocks_trading\resources\views/user/account/password.blade.php ENDPATH**/ ?>