<?php $__env->startSection('body_class','register'); ?>

<?php $__env->startSection('content'); ?>
    <div>
        <div class="login_wrapper">
            <div class="animate form">
                <section class="login_content">
                    <?php echo e(Form::open(['route' => 'register'])); ?>

                        <h1><?php echo e(__('views.auth.register.header')); ?></h1>
                        <div>
                            <input type="text" name="name" class="form-control"
                                   placeholder="<?php echo e(__('views.auth.register.input_0')); ?>"
                                   value="<?php echo e(old('name')); ?>" required autofocus/>
                        </div>
                        <div>
                            <input type="text" name="first_name" class="form-control"
                                   placeholder="First Name"
                                   value="<?php echo e(old('first_name')); ?>" required autofocus/>
                        </div>
                        <div>
                            <input type="text" name="last_name" class="form-control"
                                   placeholder="Last Name"
                                   value="<?php echo e(old('last_name')); ?>" required autofocus/>
                        </div>
                        <div>
                            <input type="email" name="email" class="form-control"
                                   placeholder="<?php echo e(__('views.auth.register.input_1')); ?>"
                                   value="<?php echo e(old('email')); ?>"
                                   required/>
                        </div>
                        <div>
                            <input type="text" name="cell_number" class="form-control"
                                   placeholder="Cell number"
                                   value="<?php echo e(old('cell_number')); ?>"
                                   required/>
                        </div>
                        <?php
                            $positions = ["Manager", "Senior Accountant", "Junior Accountant", "Chartered Accountant", "Book Keeper"];
                        ?>
                        <div style="margin-bottom: 10px;">
                            <select id="position" name="position" style="width: 100%" autocomplete="off" class="select2 form-control">
                                <?php $__currentLoopData = $positions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $position): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($position); ?>"><?php echo e($position); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div>
                            <input type="password" name="password" class="form-control"
                                   placeholder="<?php echo e(__('views.auth.register.input_2')); ?>"
                                   required=""/>
                        </div>
                        <div>
                            <input type="password" name="password_confirmation" class="form-control"
                                   placeholder="<?php echo e(__('views.auth.register.input_3')); ?>"
                                   required/>
                        </div>

                        <?php if(session('status')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>

                        <?php if(!$errors->isEmpty()): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $errors->first(); ?>

                            </div>
                        <?php endif; ?>

                        <?php if(config('auth.captcha.registration')): ?>
                            <?php echo app('captcha')->renderCaptcha(); ?>
                        <?php endif; ?>

                        <div>
                            <button type="submit"
                                    class="btn btn-default submit"><?php echo e(__('views.auth.register.action_1')); ?></button>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link"><?php echo e(__('views.auth.register.message')); ?>

                                <a href="<?php echo e(route('login')); ?>" class="to_register"> <?php echo e(__('views.auth.register.action_2')); ?> </a>
                            </p>

                            <div class="clearfix"></div>
                            <br/>

                            <div>
                                <div class="h1"><?php echo e(config('app.name')); ?></div>
                                <p>&copy; <?php echo e(date('Y')); ?> <?php echo e(config('app.name')); ?>. <?php echo e(__('views.auth.register.copyright_0')); ?></p>
                                <p><?php echo e(__('views.auth.register.copyright_1')); ?></p>
                            </div>
                        </div>
                    <?php echo e(Form::close()); ?>

                </section>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    ##parent-placeholder-bf62280f159b1468fff0c96540f3989d41279669##

    <?php echo e(Html::style(mix('assets/auth/css/register.css'))); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/f1303363/public_html/comp1230/assignments/assignment4/resources/views/auth/register.blade.php ENDPATH**/ ?>