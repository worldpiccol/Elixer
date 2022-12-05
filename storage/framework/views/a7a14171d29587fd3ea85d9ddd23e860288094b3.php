<?php $__env->startSection('title', 'Register'); ?>

<?php $__env->startSection('content'); ?>

<div class="auth-content my-auto">
    <div class="text-center">
        <h5 class="mb-0">Register Account</h5>
        <p class="text-muted mt-2">Get your free <?php echo e(config('app.name')); ?> account now.</p>
    </div>
    <form class="needs-validation mt-4 pt-2" novalidate method="POST" action="<?php echo e(route('register')); ?>" >
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="username" class="form-label">Legal Name</label>
            <input type="text" name="name" class="form-control" id="username" placeholder="Enter name" value="<?php echo e(old('name')); ?>" required autofocus>
            <div class="invalid-feedback">
                Please Enter Your Legal Name
            </div>
            <?php $__errorArgs = ['name'];
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

        <div class="mb-3">
            <label for="useremail" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="useremail" placeholder="Enter email" value="<?php echo e(old('email')); ?>" required>
            <div class="invalid-feedback">
                Please Enter Email
            </div>
             <?php $__errorArgs = ['email'];
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
         <div class="mb-3">
            <label for="useremail" class="form-label">Gender</label>
            <select class="form-control" name="gender" id="" required>
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="fmale">Female</option>
            </select>
             <?php $__errorArgs = ['gender'];
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

        

        <div class="mb-3">
            <label for="userpassword" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="userpassword" placeholder="Enter password" required>
            <div class="invalid-feedback">
                Please Enter Password
            </div>
            <?php $__errorArgs = ['password'];
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
        <div class="mb-3">
            <label for="userpassword" class="form-label">Password Confirmation</label>
            <input type="password" name="password_confirmation" class="form-control" id="userpassword" placeholder="Confirm password" required>
            <div class="invalid-feedback">
                Please Confirm Password
            </div>
        </div>
        <div class="mb-4">
            <p class="mb-0">By registering you agree to the <?php echo e(config('app.name')); ?> <a href="#" class="text-primary">Terms and Conditions.</a></p>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bitsrvud/bit_st/resources/views/auth/register.blade.php ENDPATH**/ ?>