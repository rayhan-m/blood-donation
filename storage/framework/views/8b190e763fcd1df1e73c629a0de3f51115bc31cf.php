


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
                    <div class="text-center">
                        <?php if(@$request_details->is_agree != 1): ?>
                            <a class="btn btn-primary" style="font-size: 20px; padding: 14px 30px; margin: 65px 2px;" href="<?php echo e(route('want_to_donate',[@$request_details->id])); ?>">I Want to Donate Blood</a>
                        <?php else: ?>
                            <h2 style="margin-top: 20px;">Thanks For Willing to Donate Blood.</h2>
                            <h4>( Patient will contact with you SOON ! )</h4>
                        <?php endif; ?>
                        
                    </div>
                </div>
            </div>
         </div>
     </section>
   <?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\blood_donation\resources\views/view_request_details.blade.php ENDPATH**/ ?>