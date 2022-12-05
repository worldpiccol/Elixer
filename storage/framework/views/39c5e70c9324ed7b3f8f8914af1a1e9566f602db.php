<?php $__env->startSection('title', 'Cryptos List'); ?>

<?php $__env->startSection('content'); ?>

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Supported Cryptos</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Cryptos</a></li>
                    <li class="breadcrumb-item active">Manage Cryptos</li>
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
            <th scope="col">Name</th>
            <th scope="col">Network</th>
            <th scope="col">Symbol</th>
            <th scope="col">Status</th>
            <th style="width: 80px; min-width: 80px;">Action</th>
            </tr>
        </thead>
        <tbody>

            <?php $__empty_1 = true; $__currentLoopData = $cryptos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crypto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <th scope="row">
                        <div class="form-check font-size-16">
                            <input type="checkbox" class="form-check-input" id="contacusercheck1">
                            <label class="form-check-label" for="contacusercheck1"></label>
                        </div>
                    </th>
                    <td>
                        <img src="<?php echo e($crypto->image_url); ?>" alt="" class="avatar-sm rounded-circle me-2">
                        <a href="#" class="text-body"><?php echo e($crypto->name); ?></a>
                    </td>
                    <td><?php echo e($crypto->category); ?></td>
                    <td><?php echo e($crypto->symbol); ?></td>
                    <td>
                        <?php if($crypto->active): ?>
                        <span class="text-success"> Active</span>
                        <?php else: ?>
                        <span class="text-danger">Suspended</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bx bx-dots-horizontal-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                 <?php if($crypto->active): ?>
                                       <li><a class="dropdown-item" href="<?php echo e(route('admin.crypto.status', $crypto->id)); ?>">Suspend Crypto</a></li>
                                        <?php else: ?>
                                        <li><a class="dropdown-item" href="<?php echo e(route('admin.crypto.status', $crypto->id)); ?>">Enable Crypto</a></li>
                                    <?php endif; ?>

                                <hr>
                                <li><a class="dropdown-item" href="<?php echo e(route('admin.crypto.delete', $crypto->id)); ?>">Delete Crypto</a></li>
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bitsrvud/bit_st/resources/views/admin/cryptos/index.blade.php ENDPATH**/ ?>