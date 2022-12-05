<?php $__env->startSection('title', 'Rewards Center'); ?>

<?php $__env->startSection('content'); ?>
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Rewards</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Reward Center</a></li>
                    <li class="breadcrumb-item active">Rewards</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<div class="row mt-5">

    <div class="float-start">

    </div>
    <div class="float-end">
        <button type="button" data-bs-toggle="modal" data-bs-target=".bs-reward" class="btn btn-light"><i class="bx bx-plus me-1"></i> Claim Voucher Code</button>
    </div>

</div>
<!-- end page title -->
<hr>
 <div class="row mt-5">
    <?php if(count($user_rewards) > 0): ?>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5>Exclusive for <?php echo e(Auth::user()->name); ?></h5>
                </div>
                <div class="card-body px-0">

                    <div class="table-responsive px-3">
                        <table class="table table-all align-middle table-nowrap table-borderless">
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $user_rewards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reward): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <?php if(!auth()->user()->hasClaimedReward($reward->id)): ?>

                                        <tr class="border-bottom">

                                            <td style="width: 50px;">
                                                <div class="">
                                                <img src="<?php echo e($reward->crypto->image_url); ?>" width="20" alt="">
                                                </div>
                                            </td>

                                            <td>
                                                <div>
                                                    <h5 class="font-size-14 mb-1"><?php echo e($reward->name); ?></h5>
                                                    <p class="text-muted mb-0 font-size-12"><?php echo e($reward->description); ?></p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-end">
                                                    <h5 class="font-size-14 mb-0"><?php echo e($reward->amount); ?> <?php echo e($reward->reward_currency); ?></h5>
                                                    <p class="text-muted mb-0 font-size-12">Reward Amount</p>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="text-end">
                                                <a href="<?php echo e(route('user.rewards.claim', $reward->id)); ?>" class="btn btn-soft-success btn-md">Claim</a>
                                                </div>
                                            </td>

                                        </tr>

                                    <?php else: ?>
                                        <td colspan="12">You have claimed all our rewards, come back later for more amazing bonuses and you can also earn more rewards by inviting your friends and family to our platform.</td>
                                    <?php endif; ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                <tr>
                                    <td colspan="12">No Rewards yet</td>
                                </tr>

                                <?php endif; ?>
                            </tbody>
                        </table>

                    </div>
                </div>
                    <!-- end card body -->
            </div>
            <!-- end card -->
        </div> <!-- end col -->

    <?php endif; ?>
    <?php if(count($public_rewards) > 0): ?>

        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-header">
                    <h5>Rewards</h5>
                </div>
                <div class="card-body px-0">

                    <div class="table-responsive px-3">
                        <table class="table table-all align-middle table-nowrap table-borderless">
                            <tbody>

                                <?php $__empty_1 = true; $__currentLoopData = $public_rewards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reward): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <?php if(!auth()->user()->hasClaimedReward($reward->id)): ?>

                                        <tr class="border-bottom">

                                            <td style="width: 50px;">
                                                <div class="">
                                                <img src="<?php echo e($reward->crypto->image_url); ?>" width="20" alt="">
                                                </div>
                                            </td>

                                            <td>
                                                <div>
                                                    <h5 class="font-size-14 mb-1"><?php echo e($reward->name); ?></h5>
                                                    <p class="text-muted mb-0 font-size-12"><?php echo e($reward->description); ?></p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-end">
                                                    <h5 class="font-size-14 mb-0"><?php echo e($reward->amount); ?> <?php echo e($reward->reward_currency); ?></h5>
                                                    <p class="text-muted mb-0 font-size-12">Reward Amount</p>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="text-end">
                                                <a href="<?php echo e(route('user.rewards.claim', $reward->id)); ?>" class="btn btn-soft-success btn-md">Claim</a>
                                                </div>
                                            </td>

                                        </tr>

                                     <?php else: ?>
                                        <td colspan="12">
                                            <div class="alert alert-info alert-dismissible text-center fade show" role="alert">
                                                   You have claimed all our rewards, come back later for more amazing bonuses and you can also earn more rewards by inviting your friends and family to our platform.
                                            </div>
                                        </td>

                                    <?php endif; ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                <tr>
                                    <td colspan="12">No Rewards yet</td>
                                </tr>

                                <?php endif; ?>
                            </tbody>
                        </table>

                    </div>
                </div>
                    <!-- end card body -->
            </div>
            <!-- end card -->
        </div> <!-- end col -->

    <?php endif; ?>

</div> <!-- end row -->

 <div class="modal fade bs-reward" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body pt-2">
                    <form class="p-3" action="<?php echo e(route('user.rewards.claim-code')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="">Voucher Code</label>
                            <input style="line-height: 35px !important;" type="text" name="code" id="" class="form-control" placeholder="Voucher Code" aria-describedby="helpId">
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-soft-info btn-lg" type="submit">Claim Reward</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH S:\jobs\bitstocks_trading\resources\views/user/rewards/index.blade.php ENDPATH**/ ?>