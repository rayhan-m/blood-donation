

<?php $__env->startSection('mainContent'); ?>

                <div class="breadcrumb">
                    <ul>
                        <li><a href="#">Dashboard</a></li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <!-- ICON BG-->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                            <div class="card-body text-center"><i class="i-Add-User"></i>
                                <div class="content">
                                    <p class="text-muted mt-2 mb-0">Total Donar</p>
                                    <p class="text-primary text-24 line-height-1 mb-2"><?php echo e(@$total_user); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                            <div class="card-body text-center"><i class="i-Add-User"></i>
                                <div class="content">
                                    <p class="text-muted mt-2 mb-0">Total Donar</p>
                                <p class="text-primary text-24 line-height-1 mb-2"><?php echo e(@$total_user); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                            <div class="card-body text-center"><i class="i-Add-User"></i>
                                <div class="content">
                                    <p class="text-muted mt-2 mb-0">Total Donar</p>
                                    <p class="text-primary text-24 line-height-1 mb-2"><?php echo e(@$total_user); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                            <div class="card-body text-center"><i class="i-Add-User"></i>
                                <div class="content">
                                    <p class="text-muted mt-2 mb-0">Total Donar</p>
                                    <p class="text-primary text-24 line-height-1 mb-2"><?php echo e(@$total_user); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card o-hidden mb-4">
                                    <div class="card-header d-flex align-items-center border-0" style="background-color: #fff;">
                                        <h3 class="w-50 float-left card-title m-0">New Donors</h3>
                                        
                                    </div>
                                    <div>
                                        <div class="table-responsive">
                                            <table class="table text-center" id="user_table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Avatar</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        $count = 1;
                                                    ?>
                                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new_user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <th scope="row"><?php echo e(@$count++); ?></th>
                                                            <td><?php echo e(@$new_user->name); ?></td>
                                                            <td><img class="rounded-circle m-0 avatar-sm-table" src="<?php echo e(file_exists(@$new_user->photo) ? asset($new_user->photo) : asset('backend/uploads/donar/donar.png')); ?>" alt="" /></td>
                                                            <td><?php echo e(@$new_user->email); ?></td>
                                                            <td> <?php if(@$new_user->active_status == 1): ?><span class="badge badge-success">  Active </span> <?php else: ?> <span class="badge badge-warning">  Inactive </span>  <?php endif; ?> </td>
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                                             <div class="row">
                            <div class="col-md-12">
                                <div class="card o-hidden mb-4">
                                    <div class="card-header d-flex align-items-center border-0" style="background-color: #fff;">
                                        <h3 class="w-50 float-left card-title m-0">New Donors</h3>
                                        
                                    </div>
                                    <div>
                                        <div class="table-responsive">
                                            <table class="table text-center" id="user_table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Avatar</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        $count = 1;
                                                    ?>
                                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new_user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <th scope="row"><?php echo e(@$count++); ?></th>
                                                            <td><?php echo e(@$new_user->name); ?></td>
                                                            <td><img class="rounded-circle m-0 avatar-sm-table" src="<?php echo e(file_exists(@$new_user->photo) ? asset($new_user->photo) : asset('backend/uploads/donar/donar.png')); ?>" alt="" /></td>
                                                            <td><?php echo e(@$new_user->email); ?></td>
                                                            <td> <?php if(@$new_user->active_status == 1): ?><span class="badge badge-success">  Active </span> <?php else: ?> <span class="badge badge-warning">  Inactive </span>  <?php endif; ?> </td>
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                        
                </div><!-- end of main-content -->

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\blood_donation\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>