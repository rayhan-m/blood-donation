
<?php $__env->startSection('mainContent'); ?>


<div class="breadcrumb">
    <ul>
        <li><a href="#">Dashboard</a></li>
        <li>Blood Donar List</li>
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
                                <th style="width:10%">SL</th>
                                <th style="width:15%">Name</th>
                                <th style="width:10%">Blood Group</th>
                                <th style="width:15%">Email</th>
                                <th style="width:10%">Phone</th>
                                <th style="width:10%">Image</th>
                                <th style="width:10%">Active Status</th>
                                <th style="width:20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count=1;
                            ?>
                            <?php $__currentLoopData = $donars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $donar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($count++); ?></td>
                                <td><?php echo e($donar->name); ?></td>
                                <td><?php echo e($donar->blood_group_id); ?></td>
                                <td><?php echo e($donar->email); ?></td>
                                <td><?php echo e($donar->phone); ?></td>
                                <td style="text-align:center;"> <img height="80px;" width="80px;"  src="<?php echo e(file_exists(@$donar->image) ? asset(@$item->image) : asset('backend/uploads/donar/donar.png')); ?>" class="img img-fluid">  </td>
                                <td>
                                    <?php if(@$donar->active_status==1): ?>
                                        <label style="font-size: 14px;" class="badge badge-success" >Active</label>
                                    <?php else: ?>
                                        <label style="font-size: 14px;" class="badge badge-danger">Deactive</label>
                                    <?php endif; ?>
                                </td>
                                <td style="text-align:center;">
                                        <a class="btn btn-outline-primary" data-toggle="modal" data-target="#viewModal<?php echo e(@$donar->id); ?>"  href="#" >View</a>
                                    <?php if(@$donar->active_status==1): ?>
                                        <a data-toggle="modal" data-target="#deleteCategoryModal<?php echo e($donar->id); ?>"  href="#"><button class="btn btn-outline-primary" >Deactive</button></a>
                                    <?php else: ?>
                                        <a data-toggle="modal" data-target="#deleteCategoryModal<?php echo e($donar->id); ?>"  href="#"><button class="btn btn-outline-primary" >Active</button></a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                                <!--  View Modal -->
                                <div id="viewModal<?php echo e(@$donar->id); ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle">Blood Donar Details</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            </div>
                                            <div class="modal-body col-md-12">
                                                <div class="col-md-5" style="float: left;">
                                                    <img style="height:200px; width:200px;"   src="<?php echo e(file_exists(@$donar->image) ? asset(@$donar->image) : asset('backend/uploads/donar/donar.png')); ?>" class="img img-fluid">  
                                                </div>
                                                <div class="col-md-7" style="float: left; margin-bottom: 60px;">
                                                    <h4> <b> Blood Group:</b> 

                                                        <?php if(@$donar->blood_group_id == 1): ?> AB -
                                                        <?php elseif(@$donar->blood_group_id == 2): ?> AB+
                                                        <?php elseif(@$donar->blood_group_id == 3): ?> A-
                                                        <?php elseif(@$donar->blood_group_id == 4): ?> A+
                                                        <?php elseif(@$donar->blood_group_id == 5): ?> B-
                                                        <?php elseif(@$donar->blood_group_id == 6): ?> B+
                                                        <?php elseif(@$donar->blood_group_id == 7): ?> O-
                                                        <?php elseif(@$donar->blood_group_id == 8): ?> O+
                                                        <?php endif; ?>
                                                    
                                                    </h4>
                                                    <h4> <b> Donar Name:</b> <?php echo e(@$donar->name); ?></h4>
                                                    <h4> <b> Phone:</b> <?php echo e(@$donar->phone); ?></h4>
                                                    <h4> <b> Email:</b> <?php echo e(@$donar->email); ?></h4>
                                                    <h4> <b>Division:</b> <?php echo e(@$donar->division_name); ?></h4>
                                                    <h4> <b>District:</b> <?php echo e(@$donar->district_name); ?></h4>
                                                    <h4> <b>Upozila:</b> <?php echo e(@$donar->upozila_name); ?></h4>
                                                    <h4> <b>Union:</b> <?php echo e(@$donar->union_name); ?></h4>
                                                    <h4> <b>Medical History:</b> <?php echo e(@$donar->medical_history); ?></h4>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!--  End View Modal -->
                             
                                <div id="deleteCategoryModal<?php echo e($donar->id); ?>" class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel-2" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title"><?php if(@$donar->active_status==1): ?> Deactive <?php else: ?> Active <?php endif; ?> Donar</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="text-center">
                                                    <h4>Are You Sure To <?php if(@$donar->active_status==1): ?> Deactive <?php else: ?> Active <?php endif; ?> Donar ?</h4>
                                                </div>

                                                <div class="mt-20 d-flex justify-content-between">
                                                    <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                                                    <?php if(@$donar->active_status==1): ?>
                                                        <form action="<?php echo e(route('blood-donar-deactive',[@$donar->id])); ?>" method="GET"
                                                        enctype="multipart/form-data">
                                                        <button class="btn btn-danger" type="submit">Deactive</button>
                                                    </form>
                                                    <?php else: ?>
                                                        <form action="<?php echo e(route('blood-donar-active',[@$donar->id])); ?>" method="GET"
                                                        enctype="multipart/form-data">
                                                        <button class="btn btn-danger" type="submit">Active</button>
                                                    </form>
                                                    <?php endif; ?>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
   

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\blood_donation\resources\views/admin/blood_donar_list.blade.php ENDPATH**/ ?>