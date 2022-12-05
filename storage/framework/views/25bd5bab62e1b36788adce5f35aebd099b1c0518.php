<?php $__env->startSection('title', 'User List'); ?>

<?php $__env->startSection('content'); ?>

 <!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">User List</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Manage Users</a></li>
                    <li class="breadcrumb-item active">User List</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row align-items-center">
    <div class="col-md-6">
        <div class="mb-3">
            <h5 class="card-title">Users Count <span class="text-muted fw-normal ms-2"><?php echo e($users->count()); ?></span></h5>
        </div>
    </div>

    <div class="col-md-6">
        <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
            <div>
                <a href="#" class="btn btn-light"><i class="bx bx-plus me-1"></i> Add New</a>
            </div>
        </div>

    </div>
</div>
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
            <th scope="col">Email</th>
            <th scope="col">Verified</th>
            <th scope="col">Status</th>
            <th style="width: 80px; min-width: 80px;">Action</th>
            </tr>
        </thead>
        <tbody>

            <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <th scope="row">
                        <div class="form-check font-size-16">
                            <input type="checkbox" class="form-check-input" id="contacusercheck1">
                            <label class="form-check-label" for="contacusercheck1"></label>
                        </div>
                    </th>
                    <td>
                        <img src="<?php echo e($user->avarta); ?>" alt="" class="avatar-sm rounded-circle me-2">
                        <a href="#" class="text-body"><?php echo e($user->name); ?></a>
                    </td>
                    <td><?php echo e($user->email); ?></td>
                    <td>
                        <?php if($user->email_verified_at !== null): ?>
                        <span class="text-success"><i class="fas fa-check-circle"></i> Email</span>
                        <?php else: ?>
                        <span class="text-danger"><i class="fa fa-circle-xmark"></i> Email</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if($user->is_active === 1): ?>
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
                                 <?php if($user->is_active === 1): ?>
                                       <li><a class="dropdown-item" href="<?php echo e(route('admin.user.status', $user->id)); ?>">Suspend Account</a></li>
                                        <?php else: ?>
                                        <li><a class="dropdown-item" href="<?php echo e(route('admin.user.status', $user->id)); ?>">Enable Account</a></li>
                                    <?php endif; ?>

                                <li><a class="dropdown-item" href="#">View User</a></li>
                                <hr>
                                <li><a class="dropdown-item" href="<?php echo e(route('admin.user.delete', $user->id)); ?>">Delete Account</a></li>
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH S:\jobs\bitstocks_trading\resources\views/admin/users/index.blade.php ENDPATH**/ ?>