<?php $__env->startSection('title', 'Reward Coupons'); ?>

<?php $__env->startSection('content'); ?>

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Coupons</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Reward Center</a></li>
                    <li class="breadcrumb-item active">Manage Wallets</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->
<!-- end row -->


    <table class="table align-middle datatable dt-responsivetable-check nowrap" style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
        <thead>
            <tr>
            <th scope="col" style="width: 50px;">
                <div class="form-check font-size-16">
                    <input type="checkbox" class="form-check-input" id="checkAll">
                    <label class="form-check-label" for="checkAll"></label>
                </div>
            </th>
            <th scope="col">Tittle</th>
            <th scope="col">Code</th>
            <th scope="col">Type</th>
            <th scope="col">Amount</th>
            <th scope="col">Credit To</th>
            <th scope="col">Status</th>
            <th style="width: 80px; min-width: 80px;">Action</th>
            </tr>
        </thead>
        <tbody>

            <?php $__empty_1 = true; $__currentLoopData = $coupons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coupon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <th scope="row">
                        <div class="form-check font-size-16">
                            <input type="checkbox" class="form-check-input" id="contacusercheck1">
                            <label class="form-check-label" for="contacusercheck1"></label>
                        </div>
                    </th>
                    <td>
                        <a href="#" class="text-body"><?php echo e($coupon->name); ?></a>
                    </td>
                    <td><strong><?php echo e($coupon->code); ?></strong></td>
                    <td><?php echo e($coupon->reward_type); ?> <?php if($coupon->reward_type === 'single-user'): ?> <small><i> - <?php echo e($coupon->user->name); ?></i></small> <?php endif; ?></td>
                    <td><?php echo e(floatval($coupon->amount)); ?> <strong><small><?php echo e($coupon->reward_currency); ?></small></strong></td>
                    <td><?php echo e($coupon->credit_reward_to); ?>  <?php if($coupon->credit_reward_to === 'crypto-balance'): ?> <small><i> - <?php echo e($coupon->crypto->symbol); ?></i></small> <?php endif; ?></td>
                    <td>
                        <?php if($coupon->is_claimed === 0): ?>
                        <span class="text-success"> Active</span>
                        <?php else: ?>
                        <span class="text-danger">Claimed</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bx bx-dots-horizontal-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">

                                <li><a class="dropdown-item" href="<?php echo e(route('admin.coupon.delete', $coupon->id)); ?>">Delete Coupon Code</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

            <?php endif; ?>

        </tbody>
    </table>
    <!-- end table -->

<!-- end table responsive -->
  <!-- init js -->
        <script>
            $(document).ready(function () { $('.datatable').DataTable(); });
        </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH S:\jobs\bitstocks_trading\resources\views/admin/coupons/index.blade.php ENDPATH**/ ?>