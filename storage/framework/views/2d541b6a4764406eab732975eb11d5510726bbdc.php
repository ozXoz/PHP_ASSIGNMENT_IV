<?php $__env->startSection('title'); ?>
Clients
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="pull-right">
    <a class="btn btn-success" href="<?php echo e(route('admin.clients.create')); ?>">+Add</a>
</div>
    <div class="row">
        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
               width="100%">
            <thead>
            <tr>
                <th>Company Name</th>
                <th>Name</th>
                <th>Business Number</th>
                <th>Phone Number</th>
                <th>HST</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($client->company_name); ?></td>
                    <td><?php echo e($client->first_name." ".$client->last_name); ?></td>
                    <td><?php echo e($client->business_number); ?></td>
                    <td><?php echo e($client->cell_number); ?></td>
                    <td><?php echo e($client->hst); ?></td>
                    <td>
                        <?php if($client->status): ?>
                            <span class="label label-primary"><?php echo e(__('views.admin.users.index.active')); ?></span>
                        <?php else: ?>
                            <span class="label label-danger"><?php echo e(__('views.admin.users.index.inactive')); ?></span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a class="btn btn-xs btn-primary" href="<?php echo e(route('admin.clients.show', [$client->id])); ?>" data-toggle="tooltip" data-placement="top" data-title="<?php echo e(__('views.admin.users.index.show')); ?>">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a class="btn btn-xs btn-info" href="<?php echo e(route('admin.clients.edit', [$client->id])); ?>" data-toggle="tooltip" data-placement="top" data-title="<?php echo e(__('views.admin.users.index.edit')); ?>">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <a href="<?php echo e(route('admin.clients.destroy', [$client->id])); ?>" class="btn btn-xs btn-danger user_destroy" data-toggle="tooltip" data-placement="top" data-title="<?php echo e(__('views.admin.users.index.delete')); ?>">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\public_html\comp1230\assignments\assignment4\resources\views/admin/clients/index.blade.php ENDPATH**/ ?>