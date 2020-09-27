


<?php $__env->startSection('mainContent'); ?>
      <!-- ################# Slider Starts Here#######################--->

    <section class="page-header" data-stellar-background-ratio="1.2" style="background-position: 0% -80px;">

            <div class="container">

                <div class="row">

                    <div class="col-sm-12 text-center">

                        <h3 style="margin-top:-50px; font-size:24px;">
                            Donate Blood
                        </h3>

                        <p class="page-breadcrumb">
                            <a style="margin-top:-50px;" href="#">Home</a> / Donate Blood
                        </p>


                    </div>

                </div> <!-- end .row  -->

            </div> <!-- end .container  -->

        </section>
    
    
     <!-- ################# Donation Process Start Here #######################--->
     
     <section id="process" class="donation-care"  style="margin-bottom: 100px;">
        <h3 style="text-align: center; margin-bottom:20px;">Blood Donate List</h3>
         <div class="container">
            <div class="row">
                
                 <table class="display table table-striped table-bordered" id="zero_configuration_table"
                        style="width:100%; font-size:12px;">
                        <thead>
                            <tr>
                                <th style="width:5%">SL</th>
                                <th style="width:15%">Request By</th>
                                <th style="width:10%">Blood Group</th>
                                <th style="width:10%">Division</th>
                                <th style="width:10%">District</th>
                                <th style="width:20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count=1;
                            ?>
                            <?php $__currentLoopData = $donate_request_lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $donate_request_list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($count++); ?></td>
                                <td><?php echo e($donate_request_list->name); ?></td>
                                <td>
                                    <?php if(@$donate_request_list->blood_group_id == 1): ?> AB -
                                    <?php elseif(@$donate_request_list->blood_group_id == 2): ?> AB+
                                    <?php elseif(@$donate_request_list->blood_group_id == 3): ?> A-
                                    <?php elseif(@$donate_request_list->blood_group_id == 4): ?> A+
                                    <?php elseif(@$donate_request_list->blood_group_id == 5): ?> B-
                                    <?php elseif(@$donate_request_list->blood_group_id == 6): ?> B+
                                    <?php elseif(@$donate_request_list->blood_group_id == 7): ?> O-
                                    <?php elseif(@$donate_request_list->blood_group_id == 8): ?> O+
                                    <?php endif; ?>    
                                </td>
                                <td><?php echo e($donate_request_list->division_name); ?></td>
                                <td><?php echo e($donate_request_list->district_name); ?></td>
                                <td style="text-align:center;">
                                    <a class="btn btn-primary"  href="<?php echo e(route('view_request_details',[@$donate_request_list->id])); ?>" >View Details</a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
            </div>
         </div>
     </section>
   <?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\blood_donation\resources\views/donate_blood_list.blade.php ENDPATH**/ ?>