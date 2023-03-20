<?php $__env->startSection('content'); ?>
    <div class="row">
        <table class="table table-striped table-hover">
            <tbody>

            <tr>
                <th>Client Name</th>
                <td><?php echo e($client_event->client->first_name." ".$client_event->client->last_name); ?></td>
            </tr>

            <tr>
                <th>Notification Name</th>
                <td>
                    <?php echo e($client_event->notification->name); ?>

                </td>
            </tr>

            <tr>
                <th>Notification Type</th>
                <td>
                    <?php echo e($client_event->notification->type); ?>

                </td>
            </tr>

            <tr>
                <th>Start Date</th>
                <td>
                    <?php echo e($client_event->start_time); ?>

                </td>
            </tr>   

            <tr>
                <th>Frequency</th>
                <td>
                    <?php echo e($client_event->frequency); ?>

                </td>
            </tr>

            <tr>
                <th>Status</th>
                <td>
                    <?php if($client_event->status): ?>
                        <span class="label label-primary"><?php echo e(__('views.admin.users.index.active')); ?></span>
                    <?php else: ?>
                        <span class="label label-danger"><?php echo e(__('views.admin.users.index.inactive')); ?></span>
                    <?php endif; ?>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\TASK\2021-12-05(php-assign)\laravel-proj\resources\views/admin/client_events/show.blade.php ENDPATH**/ ?>