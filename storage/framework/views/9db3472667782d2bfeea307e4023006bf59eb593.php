
<?php $__env->startSection('mainContent'); ?>


<div class="breadcrumb">
    <ul>
        <li><a href="#">Dashboard</a></li>
        <li>Specfic Donar List</li>
    </ul>
</div>
<div class=" border-top"></div>
<div class="mt-20 mb-20">
    <a class="btn btn-primary" href="<?php echo e(route('send_notification',[@$data['fb_id'],@$data['bg_id'],$data['div_id'],$data['dis_id'],$data['upa_id'],$data['uni_id']])); ?>">Send Notification</a>
    <a class="btn btn-primary" href="<?php echo e(route('send_notification_email',[@$data['bg_id'],$data['div_id'],$data['dis_id'],$data['upa_id'],$data['uni_id']])); ?>">Send Notification Email</a>
</div>

<!-- Table row-->
<div class="row mb-4">
    <div class="col-md-12 mb-4">
        <div class="card text-left">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="display table table-striped table-bordered" 
                        style="width:100%; font-size:12px;">
                        <thead>
                            <tr>
                                <th style="width:5%">SL</th>
                                <th style="width:15%">Name</th>
                                <th style="width:10%">Blood Group</th>
                                <th style="width:15%">Email</th>
                                <th style="width:10%">Phone</th>
                                <th style="width:10%">Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count=1;
                            ?>
                            <?php $__currentLoopData = $specfic_donars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $specfic_donar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($count++); ?></td>
                                <td><?php echo e($specfic_donar->name); ?></td>
                                <td><?php if(@$specfic_donar->blood_group_id == 1): ?> AB -
                                    <?php elseif(@$specfic_donar->blood_group_id == 2): ?> AB+
                                    <?php elseif(@$specfic_donar->blood_group_id == 3): ?> A-
                                    <?php elseif(@$specfic_donar->blood_group_id == 4): ?> A+
                                    <?php elseif(@$specfic_donar->blood_group_id == 5): ?> B-
                                    <?php elseif(@$specfic_donar->blood_group_id == 6): ?> B+
                                    <?php elseif(@$specfic_donar->blood_group_id == 7): ?> O-
                                    <?php elseif(@$specfic_donar->blood_group_id == 8): ?> O+
                                    <?php endif; ?>    
                                </td>
                                <td><?php echo e($specfic_donar->email); ?></td>
                                <td><?php echo e($specfic_donar->phone); ?></td>
                                <td style="text-align:center;"> <img height="80px;" width="80px;"  src="<?php echo e(file_exists(@$specfic_donar->image) ? asset(@$specfic_donar->image) : asset('backend/uploads/donar/donar.png')); ?>" class="img img-fluid">  </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
   

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\blood_donation\resources\views/admin/specific_donar_list.blade.php ENDPATH**/ ?>