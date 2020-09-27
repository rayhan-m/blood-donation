


<?php $__env->startSection('mainContent'); ?>
      <!-- ################# Slider Starts Here#######################--->

    <section class="page-header" data-stellar-background-ratio="1.2" style="background-position: 0% -80px;">

            <div class="container">

                <div class="row">

                    <div class="col-sm-12 text-center">

                        <h3 style="margin-top:-50px; font-size:24px;">
                            Blood Request
                        </h3>

                        <p class="page-breadcrumb">
                            <a style="margin-top:-50px;" href="#">Home</a> / Blood Request
                        </p>


                    </div>

                </div> <!-- end .row  -->

            </div> <!-- end .container  -->

        </section>
    
    
     <!-- ################# Donation Process Start Here #######################--->
     
     <section id="process" class="donation-care"  style="margin: 100px; 0px;">
         <div class="container">
            <div class="row">
                 <div class="col-md-12 mb-4">
                    <div class="card text-left">
                        <div class="card-body">
                            <div class="col-md-4" style="float: left;">
                            <img height="160px;" width="280px;"  src="<?php echo e(asset('backend/uploads/donar/patient.jpg')); ?>" class="img img-fluid">
                            </div>
                            <div class="col-md-4" style="float: left;">
                            <h3> <b>Blood Group:</b> <?php echo e($request_details->blood_group_id); ?></h3>
                            <h3> <b>Division:</b> <?php echo e($request_details->division_name); ?></h3>
                            <h3> <b>District:</b> <?php echo e($request_details->district_name); ?></h3>
                            <h3> <b>Address:</b> <?php echo e($request_details->location); ?></h3>
                            </div>
                            <div class="col-md-4" style="float: left;">
                            <h3> <b>Upazila:</b> <?php echo e($request_details->upozila_name); ?></h3>
                            <h3> <b>Union:</b> <?php echo e($request_details->union_name); ?></h3>
                            <h3> <b>Medical History:</b> <?php echo e($request_details->patient_medical_history); ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="text-center" style="margin-top: 30px;">
                        <h2>Donors List</h2>
                        
                        
                        <table class="display table table-striped table-bordered" style="width:100%; font-size:12px;">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Blood Group</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count=1;
                            ?>
                            <?php $__currentLoopData = $donors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $donor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($count++); ?></td>
                                <td><?php echo e($donor->name); ?></td>
                                <td>
                                    <?php if(@$donor->blood_group_id == 1): ?> AB -
                                    <?php elseif(@$donor->blood_group_id == 2): ?> AB+
                                    <?php elseif(@$donor->blood_group_id == 3): ?> A-
                                    <?php elseif(@$donor->blood_group_id == 4): ?> A+
                                    <?php elseif(@$donor->blood_group_id == 5): ?> B-
                                    <?php elseif(@$donor->blood_group_id == 6): ?> B+
                                    <?php elseif(@$donor->blood_group_id == 7): ?> O-
                                    <?php elseif(@$donor->blood_group_id == 8): ?> O+
                                    <?php endif; ?>    
                                </td>
                                <td style="text-align:center;"> <img height="80px;" width="80px;"  src="<?php echo e(file_exists(@$donor->image) ? asset(@$donor->image) : asset('backend/uploads/donar/donar.png')); ?>" class="img img-fluid">  </td>
                                <td style="text-align:center;">
                                    <a class="btn btn-secondary" data-toggle="modal" data-target="#viewModal<?php echo e(@$donor->id); ?>"  href="#" >View</a>
                                    <a class="btn btn-primary" href="#">Receved Blood</a>
                                </td>
                            </tr>

                            <!--  View Modal -->
                                <div id="viewModal<?php echo e(@$donor->id); ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle">Blood donor Details</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            </div>
                                            <div class="modal-body col-md-12">
                                                <div class="col-md-5" style="float: left;">
                                                    <img style="height:200px; width:200px;"   src="<?php echo e(file_exists(@$donor->image) ? asset(@$donor->image) : asset('backend/uploads/donar/donar.png')); ?>" class="img img-fluid">  
                                                </div>
                                                <div class="col-md-7" style="float: left; margin-bottom: 60px;">
                                                    <h3> <b> Blood Group:</b> 

                                                        <?php if(@$donor->blood_group_id == 1): ?> AB -
                                                        <?php elseif(@$donor->blood_group_id == 2): ?> AB+
                                                        <?php elseif(@$donor->blood_group_id == 3): ?> A-
                                                        <?php elseif(@$donor->blood_group_id == 4): ?> A+
                                                        <?php elseif(@$donor->blood_group_id == 5): ?> B-
                                                        <?php elseif(@$donor->blood_group_id == 6): ?> B+
                                                        <?php elseif(@$donor->blood_group_id == 7): ?> O-
                                                        <?php elseif(@$donor->blood_group_id == 8): ?> O+
                                                        <?php endif; ?>
                                                    
                                                    </h3>
                                                    <h3> <b>Donor Name:</b> <?php echo e(@$donor->name); ?></h3>
                                                    <h3> <b>Phone: <span style="font-size:40px;" ><?php echo e(@$donor->phone); ?></span></b></h3>
                                                    <h3> <b>Email:</b> <?php echo e(@$donor->email); ?></h3>
                                                    <h3> <b>Division:</b> <?php echo e(@$donor->division_name); ?></h3>
                                                    <h3> <b>District:</b> <?php echo e(@$donor->district_name); ?></h3>
                                                    <h3> <b>Upozila:</b> <?php echo e(@$donor->upozila_name); ?></h3>
                                                    <h3> <b>Union:</b> <?php echo e(@$donor->union_name); ?></h3>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!--  End View Modal -->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                        
                    </div>
                </div>
            </div>
         </div>
     </section>
   <?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\blood_donation\resources\views/blood_request_details.blade.php ENDPATH**/ ?>