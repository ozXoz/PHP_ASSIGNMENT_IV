<?php $__env->startSection('title'); ?>
Logs
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
               width="100%">
            <thead>
            <tr>
                <th>Employee</th>
                <th>Module</th>
                <th>Action</th>
                <th>Action time</th>
                <th>Ip address</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($log->employee->name); ?></td>
                    <td><?php echo e($log->module); ?></td>
                    <td><?php echo e($log->action); ?></td>
                    <td><?php echo e($log->action_time); ?></td>
                    <td><?php echo e($log->ip_address); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\public_html\comp1230\assignments\assignment4\resources\views/admin/logs/index.blade.php ENDPATH**/ ?>