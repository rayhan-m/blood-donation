
<?php $__env->startSection('mainContent'); ?>


<div class="breadcrumb">
    <ul>
        <li><a href="#">Dashboard</a></li>
        <li>Old Blood Request List</li>
    </ul>
</div>
<div class=" border-top"></div>


<!-- Table row-->
<div class="row mb-4">
    <div class="col-md-12 mb-4">
        <div class="card text-left">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="display table table-striped table-bordered" id="zero_configuration_table"
                        style="width:100%; font-size:12px;">
                        <thead>
                            <tr>
                                <th style="width:5%">SL</th>
                                <th style="width:20%">Request By</th>
                                <th style="width:10%">Blood Group</th>
                                <th style="width:10%">Division</th>
                                <th style="width:10%">District</th>
                                <th style="width:10%">Is Approved</th>
                                <th style="width:10%">Active Status</th>
                                <th style="width:15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count=1;
                            ?>
                            <?php $__currentLoopData = $old_requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $old_request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($count++); ?></td>
                                <td>hfghfgh</td>
                                <td>ghdfghdfhg</td>
                                <td>ghdfghdfhg</td>
                                <td>ghdfghdfhg</td>
                                
                                <td>
                                    <?php if(@$old_request->is_approved==1): ?>
                                        <label style="font-size: 14px;" class="badge badge-success" >Approved</label>
                                    <?php else: ?>
                                        <label style="font-size: 14px;" class="badge badge-danger">Pending</label>
                                    <?php endif; ?>


                                </td>
                                <td>
                                    <?php if(@$old_request->active_status==1): ?>
                                        <label style="font-size: 14px;" class="badge badge-success" >Active</label>
                                    <?php else: ?>
                                        <label style="font-size: 14px;" class="badge badge-danger">Deactive</label>
                                    <?php endif; ?>
                                </td>
                                <td style="text-align:center;">
                                    <a class="btn btn-outline-primary"  href="#" >View Details</a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
   

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\blood_donation\resources\views/admin/old_reqiest_list.blade.php ENDPATH**/ ?>