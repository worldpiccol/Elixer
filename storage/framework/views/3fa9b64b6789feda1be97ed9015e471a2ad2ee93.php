<?php $__env->startSection('title', 'Add Wallet Address'); ?>;

<?php $__env->startSection('content'); ?>

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Add Deposit Wallet Address</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Wallet Addresses</a></li>
                    <li class="breadcrumb-item active">Add Wallet</li>
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
                    <form id="" method="post" action="<?php echo e(route('admin.wallet.store')); ?>">
                        <?php echo csrf_field(); ?>
                        <input type="hidden"/>
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Select Crypto</label>
                                    <select class="form-control" name="crypto_id" id="" required>
                                        <option value="">-- SELECT CRYPTO --</option>
                                        <?php $__currentLoopData = $cryptos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crypto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <option value="<?php echo e($crypto->id); ?>">- <?php echo e($crypto->name); ?> (<?php echo e($crypto->symbol); ?>)</option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Network</label>
                                    <input type="text" name="platform" class="form-control" placeholder="Network" required />
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Tittle</label>
                                    <input type="text" name="tittle" required class="form-control"  placeholder="Wallet Tittle"/>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Wallet Address</label>
                                    <input type="text" id="pwd" name="wallet_address" class="form-control" placeholder="Wallet Address" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label>Instruction To User - <small><i>optional</i></small></label>
                                   <textarea name="instruction_to_user" class="form-control" id="" cols="30" rows="5"></textarea>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bitsrvud/bit_st/resources/views/admin/wallets/create.blade.php ENDPATH**/ ?>