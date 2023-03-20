<?php $__env->startSection('title', __('views.admin.users.show.title', ['name' => $user->name])); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <table class="table table-striped table-hover">
            <tbody>
            <tr>
                <th><?php echo e(__('views.admin.users.show.table_header_0')); ?></th>
                <td><img src="<?php echo e($user->avatar); ?>" class="user-profile-image"></td>
            </tr>

            <tr>
                <th>Username</th>
                <td><?php echo e($user->name); ?></td>
            </tr>

            <tr>
                <th>Name</th>
                <td><?php echo e($user->first_name." ".$user->last_name); ?></td>
            </tr>

            <tr>
                <th><?php echo e(__('views.admin.users.show.table_header_2')); ?></th>
                <td>
                    <a href="mailto:<?php echo e($user->email); ?>">
                        <?php echo e($user->email); ?>

                    </a>
                </td>
            </tr>

            <tr>
                <th>Cell Number</th>
                <td><?php echo e($user->cell_number); ?></td>
            </tr>

            <tr>
                <th><?php echo e(__('views.admin.users.show.table_header_3')); ?></th>
                <td>
                    <?php echo e($user->roles->pluck('name')->implode(',')); ?>

                </td>
            </tr>

            <tr>
                <th>Position</th>
                <td>
                    <?php echo e($user->position); ?>

                </td>
            </tr>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\TASK\2021-12-05(php-assign)\laravel-proj\resources\views/admin/users/show.blade.php ENDPATH**/ ?>