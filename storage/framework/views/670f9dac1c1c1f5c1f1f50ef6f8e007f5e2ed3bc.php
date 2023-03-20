<?php $__env->startSection('title', __('views.admin.users.show.title', ['name' => $client->first_name." ".$client->last_name])); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <table class="table table-striped table-hover">
            <tbody>

            <tr>
                <th>Name</th>
                <td><?php echo e($client->first_name." ".$client->last_name); ?></td>
            </tr>

            <tr>
                <th>Company Name</th>
                <td>
                    <?php echo e($client->company_name); ?>

                </td>
            </tr>

            <tr>
                <th>Cell Number</th>
                <td><?php echo e($client->cell_number); ?></td>
            </tr>

            <tr>
                <th>Phone Number</th>
                <td><?php echo e($client->phone_number); ?></td>
            </tr>

            <tr>
                <th>HST</th>
                <td>
                    <?php echo e($client->hst); ?>

                </td>
            </tr>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\TASK\2021-12-05(php-assign)\laravel-proj\resources\views/admin/clients/show.blade.php ENDPATH**/ ?>