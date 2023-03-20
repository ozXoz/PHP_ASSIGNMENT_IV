<?php $__env->startSection('title'); ?>
Client events
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="pull-right">
    <a class="btn btn-success" href="<?php echo e(route('admin.client_events.create')); ?>">+Add</a>
</div>
    <div class="row">
        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
               width="100%">
            <thead>
            <tr>
                <th>Client Name</th>
                <th>Notification Name</th>
                <th>Type</th>
                <th>Start Date</th>
                <th>Frequency</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $client_events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client_event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($client_event->client->first_name." ".$client_event->client->last_name); ?></td>
                    <td><?php echo e($client_event->notification->name); ?></td>
                    <td><?php echo e($client_event->notification->type); ?></td>
                    <td><?php echo e($client_event->start_time); ?></td>
                    <td><?php echo e($client_event->frequency); ?></td>
                    <td>
                        <?php if($client_event->status): ?>
                            <span class="label label-primary"><?php echo e(__('views.admin.users.index.active')); ?></span>
                        <?php else: ?>
                            <span class="label label-danger"><?php echo e(__('views.admin.users.index.inactive')); ?></span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a class="btn btn-xs btn-primary" href="<?php echo e(route('admin.client_events.show', [$client_event->id])); ?>" data-toggle="tooltip" data-placement="top" data-title="<?php echo e(__('views.admin.users.index.show')); ?>">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a class="btn btn-xs btn-info" href="<?php echo e(route('admin.client_events.edit', [$client_event->id])); ?>" data-toggle="tooltip" data-placement="top" data-title="<?php echo e(__('views.admin.users.index.edit')); ?>">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <a href="<?php echo e(route('admin.client_events.destroy', [$client_event->id])); ?>" class="btn btn-xs btn-danger user_destroy" data-toggle="tooltip" data-placement="top" data-title="<?php echo e(__('views.admin.users.index.delete')); ?>">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\TASK\2021-12-05(php-assign)\laravel-proj\resources\views/admin/client_events/index.blade.php ENDPATH**/ ?>