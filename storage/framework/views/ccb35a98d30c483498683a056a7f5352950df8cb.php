<?php $__env->startSection('title', 'Withdraw Wallets'); ?>

<?php $__env->startSection('content'); ?>
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Withdraw Wallets</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Account</a></li>
                    <li class="breadcrumb-item active">Wallets</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->
<div class="row align-items-center mt-4">
    <div class="col-md-6">
        <div class="mb-3">
            <h5 class="card-title">Total enterie <span class="text-muted fw-normal ms-2">(<?php echo e($wallets->count()); ?>)</span></h5>
        </div>
    </div>
    <div class="col-md-6">
        <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
            <div>
                <a data-bs-toggle="modal" data-bs-target=".bs-wallet-add" class="btn btn-light"><i class="bx bx-plus me-1"></i> Add New</a>
            </div>
        </div>

    </div>
</div>

<div class="row mt-4">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-striped mb-0">

                <thead>

                </thead>
                <tbody>

                    <?php $__empty_1 = true; $__currentLoopData = $wallets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                        <tr>
                            <th scope="row"><img src="<?php echo e($item->crypto->image_url); ?>" width="20" alt=""></th>
                            <td><?php echo e($item->crypto->symbol); ?></td>
                            <td><?php echo e($item->title); ?></td>
                            <td><?php echo e(Str::limit($item->address, 20)); ?></td>
                            <td><?php echo e($item->created_at->diffForHumans()); ?></td>
                            <td></td>
                        </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr><td colspan="12"> You have not added any withdrawal wallet yet...</td></tr>
                    <?php endif; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade bs-wallet-add" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body pt-2">
                <form class="p-1" action="<?php echo e(route('user.wallets.add')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="">Select Crypto</label>
                        <select style="line-height: 35px !important;" class=" form-control" name="crypto" id="">
                            <?php $__currentLoopData = $cryptos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crypto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($crypto->id); ?>"><?php echo e($crypto->symbol); ?> - <?php echo e($crypto->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>

                    </div>
                    <div class="form-group mt-3">
                            <label for="">Title</label>
                            <input style="line-height: 35px !important;" class=" form-control" type="text" name="title" placeholder="title" required>
                    </div>
                    <div class="form-group mt-3">
                            <label for="">Wallet Address</label>
                            <input style="line-height: 35px !important;" class=" form-control" type="text" name="address" placeholder="Wallet Address" required>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-soft-info btn-lg" type="submit">Add Wallet</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH S:\jobs\bitstocks_trading\resources\views/user/account/wallets.blade.php ENDPATH**/ ?>