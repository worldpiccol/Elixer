<?php $__env->startSection('title', 'Withdrawals'); ?>

<?php $__env->startSection('content'); ?>

 <!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Withdrawals</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item active">Withdrawls</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row align-items-center">
    <div class="col-md-6">
        <div class="mb-3">
            <h5 class="card-title">Total <span class="text-muted fw-normal ms-2">(<?php echo e($withdrawals->count()); ?>)</span> enteries</h5>
        </div>
    </div>


</div>
<!-- end row -->

 <div class="col-xl-12 mt-5">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Withdrawals</h4>
                <div class="flex-shrink-0">
                    <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#transactions-all-tab" role="tab">
                                All
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#transactions-buy-tab" role="tab">
                                Pending
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#transactions-sell-tab" role="tab">
                                Completed
                            </a>
                        </li>
                    </ul>
                    <!-- end nav tabs -->
                </div>
            </div><!-- end card header -->

            <div class="card-body px-0">
                <div class="tab-content">
                    <div class="tab-pane active" id="transactions-all-tab" role="tabpanel">
                        <div class="table-responsive px-3">
                            <table class="table datatable align-middle table-nowrap table-borderless">
                                <thead>
                                    <tr class="">
                                        <th>Ref</th>
                                        <th>User</th>
                                        <th>Amount</th>
                                        <th>Currency</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $__empty_1 = true; $__currentLoopData = $withdrawals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $withdrawal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr class="">
                                        <td>
                                            <span><?php echo e($withdrawal->tnx_id); ?></span>
                                        </td>
                                        <td>
                                                <img src="<?php echo e($withdrawal->user->avarta); ?>" alt="" class="avatar-sm rounded-circle me-2">
                                                <span class="text-body"><?php echo e($withdrawal->user->name); ?></span><br>
                                                <small> <?php echo e($withdrawal->user->email); ?></small>
                                        </td>
                                        <td>
                                            <?php echo e($withdrawal->total); ?> <br>
                                            <small> WD TO: <?php echo e($withdrawal->wd_wallet->address); ?></small>
                                        </td>
                                        <td><?php echo e($withdrawal->currency); ?></td>
                                        <td><?php echo e($withdrawal->created_at->diffForHumans()); ?></td>
                                        <td>
                                          <?php if($withdrawal->status  === 'processing'): ?>

                                          <span class="badge p-1 bg-warning">processing</span>

                                          <?php elseif($withdrawal->status  === 'completed'): ?>
                                           <span class="badge p-1 bg-success">completed</span>
                                          <?php endif; ?>
                                        </td>
                                        <td class="text-center">
                                        <?php if($withdrawal->status  === 'processing'): ?>

                                          <a class="btn btn-soft-success sm" href="<?php echo e(route('admin.withdrawal.approve', $withdrawal->id)); ?>">Confirm</a>

                                          <?php elseif($withdrawal->status  === 'completed'): ?>
                                           <span class=""><i>complete</i><span>
                                          <?php endif; ?>
                                        </td>
                                    </tr>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                    <?php endif; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end tab pane -->
                    <div class="tab-pane" id="transactions-buy-tab" role="tabpanel">
                        <div class="table-responsive px-3">
                           <table class="table pending align-middle table-nowrap table-borderless">
                                <thead>
                                    <tr class="">
                                        <th>Ref</th>
                                        <th>User</th>
                                        <th>Amount</th>
                                        <th>Currency</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $__empty_1 = true; $__currentLoopData = $withdrawals_pending; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $withdrawal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr class="">
                                        <td>
                                            <span><?php echo e($withdrawal->tnx_id); ?></span>
                                        </td>
                                        <td>
                                                <img src="<?php echo e($withdrawal->user->avarta); ?>" alt="" class="avatar-sm rounded-circle me-2">
                                                <span class="text-body"><?php echo e($withdrawal->user->name); ?></span><br>
                                                <small><?php echo e($withdrawal->user->email); ?></small>
                                        </td>
                                        <td><?php echo e($withdrawal->total); ?></td>
                                        <td><?php echo e($withdrawal->currency); ?></td>
                                        <td><?php echo e($withdrawal->created_at->diffForHumans()); ?></td>
                                        <td>
                                          <?php if($withdrawal->status  === 'processing'): ?>

                                          <span class="badge p-1 bg-warning">processing</span>

                                          <?php elseif($withdrawal->status  === 'completed'): ?>
                                           <span class="badge p-1 bg-success">completed</span>
                                          <?php endif; ?>
                                        </td>
                                        <td class="text-center">
                                        <?php if($withdrawal->status  === 'processing'): ?>

                                          <a class="btn btn-soft-success sm" href="<?php echo e(route('admin.withdrawal.approve', $withdrawal->id)); ?>">Approve</a>

                                          <?php elseif($withdrawal->status  === 'completed'): ?>
                                           <span class=""><i>complete</i><span>
                                          <?php endif; ?>
                                        </td>
                                    </tr>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                    <?php endif; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end tab pane -->
                    <div class="tab-pane" id="transactions-sell-tab" role="tabpanel">
                        <div class="table-responsive px-3" data-simplebar style="max-height: 352px;">
                           <table class="table completed align-middle table-nowrap table-borderless">
                                <thead>
                                    <tr class="">
                                        <th>Ref</th>
                                        <th>User</th>
                                        <th>Amount</th>
                                        <th>Currency</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $__empty_1 = true; $__currentLoopData = $withdrawals_complete; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $withdrawal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr class="">
                                        <td>
                                            <span><?php echo e($withdrawal->tnx_id); ?></span>
                                        </td>
                                        <td>
                                                <img src="<?php echo e($withdrawal->user->avarta); ?>" alt="" class="avatar-sm rounded-circle me-2">
                                                <span class="text-body"><?php echo e($withdrawal->user->name); ?></span><br>
                                                <small><?php echo e($withdrawal->user->email); ?></small>
                                        </td>
                                        <td><?php echo e($withdrawal->total); ?></td>
                                        <td><?php echo e($withdrawal->currency); ?></td>
                                        <td><?php echo e($withdrawal->completed_at); ?></td>
                                        <td>
                                          <?php if($withdrawal->status  === 'processing'): ?>

                                          <span class="badge p-1 bg-warning">processing</span>

                                          <?php elseif($withdrawal->status  === 'completed'): ?>
                                           <span class="badge p-1 bg-success">completed</span>
                                          <?php endif; ?>
                                        </td>

                                    </tr>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                    <?php endif; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end tab pane -->
                </div>
                <!-- end tab content -->
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

<!-- end table responsive -->
  <!-- init js -->
        <script>
            $(document).ready(function () { $('.datatable').DataTable(); });
            $(document).ready(function () { $('.pending').DataTable(); });
            $(document).ready(function () { $('.completed').DataTable(); });
        </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH S:\jobs\bitstocks_trading\resources\views/admin/withdraw/index.blade.php ENDPATH**/ ?>