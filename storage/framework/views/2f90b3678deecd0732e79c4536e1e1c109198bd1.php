<?php $__env->startSection('title', 'Deposit'); ?>

<?php $__env->startSection('content'); ?>

<style>
    .icon-demo-content i {

        display: inline-flex;
        width: 40px;
        height: 40px;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        font-size: 20px;
        color: var(--bs-gray-600);
        -webkit-transition: all .4s;
        transition: all .4s;
        border: 1px solid var(--bs-gray-300);
        border-radius: 50%;
        margin-right: 16px;
        vertical-align: middle;
    }

</style>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Select Withdrawal Address</h4>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-8 offset-md-2">
            <div class="col-md-12">
                <div class="card-deck">
                   <?php $__currentLoopData = $withdrawal_addresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="md-6">
                            <div style="box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px; border:none;" class="card">
                                <div class="card-body">
                                    <div class="float-end icon-demo-content pt-2">
                                        <a href="<?php echo e(route('user.withdrawal.wallet', ['transaction' => $tnx->id , 'wallet' => $address->id] )); ?>"><i class="fas fa-angle-right"></i></a>
                                    </div>
                                    <img class="float-start me-3 mt-2" src="<?php echo e($address->crypto->image_url); ?>" width="35" alt="">
                                    <h4 class="card-title text-muted fw-bolde pt-1"><?php echo e($address->title); ?></h4>
                                    <p class="card-text text-muted fst-italic"><?php echo e(Str::limit($address->address, 20)); ?></p>

                                </div>

                            </div>
                        </div>

                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH S:\jobs\bitstocks_trading\resources\views/user/transactions/wallet.blade.php ENDPATH**/ ?>