<?php $__env->startSection('title', 'Investments'); ?>

<?php $__env->startSection('content'); ?>

 <!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Invested Log</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row align-items-center">
    <div class="col-md-6">
        <div class="mb-3">
            <h5 class="card-title">Tottal <span class="text-muted fw-normal ms-2"><?php echo e($investments->count()); ?></span> enteries.</h5>
        </div>
    </div>
</div>
<!-- end row -->

<div class="col-xl-12 mt-5">
    <div class="card">
        <div class="card-body px-0">

            <div class="table-responsive px-3">
                <table class="table datatable align-middle table-nowrap table-borderless">
                    <thead>
                        <tr class="">
                            <th>IVX</th>
                            <th>User</th>
                            <th>Capital</th>
                            <th>Rate</th>
                            <th>Duration</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $__empty_1 = true; $__currentLoopData = $investments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ivx): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="">

                            <td><?php echo e($ivx->ivx); ?></td>
                             <td>
                                    <img src="<?php echo e($ivx->user->avarta); ?>" alt="" class="avatar-sm rounded-circle me-2">
                                    <span class="text-body"><?php echo e($ivx->user->name); ?></span><br>
                                    <small> <?php echo e($ivx->user->email); ?></small>
                                </td>
                            <td>
                               <strong><?php echo e($ivx->amount); ?> <?php echo e($ivx->currency); ?></strong>
                            </td>

                            <td><?php echo e($ivx->rate); ?> / <?php echo e($ivx->term_calc); ?></td>
                            <td><?php echo e($ivx->investScheme->terms); ?> - <?php echo e($ivx->investScheme->term_type); ?></td>
                            <td><?php echo e($ivx->term_start); ?></td>
                            <td><?php echo e($ivx->term_end); ?></td>
                            <td>
                                <?php if($ivx->status === 'active'): ?>
                                     <span class="badge bg-soft-primary text-dark">Active</span> <br>
                                <?php else: ?>
                                     <span class="badge bg-soft-success text-dark">Completed</span> <br>
                                <?php endif; ?>
                            </td>
                            <td><?php echo e($ivx->created_at->diffForHumans()); ?></td>
                        </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                        <?php endif; ?>

                    </tbody>
                </table>
            </div>

        </div>
        <!-- end card body -->
    </div>
        <!-- end card -->
</div>

<!-- end table responsive -->
  <!-- init js -->
<script>
    $(document).ready(function () { $('.datatable').DataTable(); });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH S:\jobs\bitstocks_trading\resources\views/admin/invests/index.blade.php ENDPATH**/ ?>