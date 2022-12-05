<?php $__env->startSection('title', 'Add Coupon'); ?>;

<?php $__env->startSection('content'); ?>

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Add Reward Coupon</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Reward Center</a></li>
                    <li class="breadcrumb-item active">Manage Coupons</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-lg-12">
        <div class="card mt-4">

            <div class="card-body">
                <div>
                    <h5 class="card-title mb-4">Create wallet</h5>
                    <form id="" method="post" action="<?php echo e(route('admin.coupon.store')); ?>">
                        <?php echo csrf_field(); ?>
                        
                        <input type="hidden"/>
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Reward Type</label>
                                    <select class="form-control reward-type" name="reward_type" id="" required>
                                        <option value="">-- SELECT REWARD TYPE--</option>
                                        <option value="public">- Public (Appears for all users to claim)</option>
                                        <option value="single-user">- User (Only available for a user)</option>
                                        <option value="code">- Code (Any user with code can claim)</option>
                                    </select>
                                </div>
                            </div>
                            <div hidden class="col-xl-4 col-md-6 user-select">
                                <div class="form-group mb-3">
                                    <label>Select User</label>
                                    <select class="form-control" name="user_id" id="">
                                        <option value="">-- SELECT USER --</option>
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <option value="<?php echo e($user->id); ?>">- <?php echo e($user->name); ?> </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                        <label>Credit To</label>
                                        <select class="form-control credit-type" name="credit_reward_to" id="" required>
                                            <option value="">-- SELECT CREDIT LOCATION--</option>
                                            
                                            <option value="crypto-balance">- User Crypto Balance</option>
                                        </select>
                                </div>
                            </div>
                            <div hidden class="col-xl-4 col-md- crypto-select">
                                <div class="form-group mb-3">
                                    <label>Select Crypto</label>
                                    <select class="form-control" name="crypto_id" id="">
                                        <option value="">-- SELECT CRYPTO --</option>
                                        <?php $__currentLoopData = $cryptos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crypto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <option value="<?php echo e($crypto->id); ?>">- <?php echo e($crypto->name); ?> (<?php echo e($crypto->symbol); ?>)</option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Coupon Name" required />
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Coupon Code - <small><i>optional</i></small></label>
                                    <input type="text" name="code" class="form-control" placeholder="Coupon Code"/>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Amount</label>
                                    <input type="text" name="amount" required class="form-control"  placeholder="Coupon Value"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label>Description - <small><i>optional</i></small></label>
                                   <textarea name="description" class="form-control" id="" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="form-group">
                            <button  type="submit" class="btn btn-light">Add Crypto</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>

<script>
    $(document).ready(function () {

        $('.reward-type').change(function (e) {
            e.preventDefault();

            type = $('.reward-type').find(":selected").val()

            if (type === 'single-user') {

                $('.user-select').removeAttr('hidden');
            }else{
                $('.user-select').attr('hidden', true);
            }

        });

        $('.credit-type').change(function (e) {
            e.preventDefault();

            type = $('.credit-type').find(":selected").val()

            if (type === 'crypto-balance') {

                $('.crypto-select').removeAttr('hidden');
            }else{
                $('.crypto-select').attr('hidden', true);
            }

        });
    });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH S:\jobs\bitstocks_trading\resources\views/admin/coupons/create.blade.php ENDPATH**/ ?>