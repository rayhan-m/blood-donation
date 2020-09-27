


<?php $__env->startSection('mainContent'); ?>
<style>
    .page-header{
        background-image: url("../frontend/assets/images/find_donar_banner.jpg");
    }
</style>
<!-- ################# Slider Starts Here#######################--->

    <section class="page-header" data-stellar-background-ratio="1.2" style="background-position: 0% -80px;">

            <div class="container">

                <div class="row">

                    <div class="col-sm-12 text-center">
                        <h3 style="margin-top:-50px; font-size:24px;">
                            Request For Blood
                        </h3>
                    </div>

                </div> <!-- end .row  -->

            </div> <!-- end .container  -->

        </section>
    
    
     <!-- ################# Donation Process Start Here #######################--->
     
     <section>
        <div class="col-md-10" style="margin-left: 120px; margin-bottom:130px;">
            <div class="auth-logo text-center mb-4"><img src="<?php echo e(asset('/')); ?><?php echo e(@$setting->logo); ?>" alt=""></div>
            <div class="card">
                <div class="card-header text-center"><?php echo e(__('Blood Request Form')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('blood_request_submit')); ?>">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="url" id="url" value="<?php echo e(URL::to('/')); ?>">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Blood Group')); ?></label>

                            <div class="col-md-6">
                                <select class="niceSelect w-100 bb form-control<?php echo e($errors->has('blood_group_id') ? ' is-invalid' : ''); ?>"
                                    name="blood_group_id" id="blood_group_id">
                                    <option data-display="Select Bread *" value="">Select Blood Group</option>
                                    <option value="1">AB-</option>
                                    <option value="2">AB+</option>
                                    <option value="3">A-</option>
                                    <option value="4">A+</option>
                                    <option value="5">B-</option>
                                    <option value="6">B+</option>
                                    <option value="7">O-</option>
                                    <option value="8">O+</option>
                                </select>
                                <span class="focus-border"></span> 
                                <?php if($errors->has('blood_group_id')): ?>
                                    <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('blood_group_id')); ?></strong>
                                    </span> 
                                <?php endif; ?>
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Division')); ?></label>
                            <?php
                                $divisions=App\Division::get();
                            ?>
                            <div class="col-md-6">
                                <select  name="division_id" class="form-control form-control-lg <?php echo e($errors->has('division_id') ? ' is-invalid' : ''); ?>" id="select_division">
                                    <option value="">Select Division</option>
                                    <?php $__currentLoopData = $divisions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $division): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($division->id); ?>"><?php echo e($division->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <span class="focus-border"></span> 
                                <?php if($errors->has('division_id')): ?>
                                    <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('division_id')); ?></strong>
                                    </span> 
                                <?php endif; ?>
                            </div>
                        </div>

                         <div class="form-group row" id="select_distric_div">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('District')); ?></label>

                            <div class="col-md-6">
                                <select class="form-control form-control-lg select_distric_for_upazila <?php echo e($errors->has('district_id') ? ' is-invalid' : ''); ?>" name="district_id" id="select_distric">
                                </select>

                                <span class="focus-border"></span> 
                                <?php if($errors->has('district_id')): ?>
                                    <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('district_id')); ?></strong>
                                    </span> 
                                <?php endif; ?>
                            </div>
                        </div>

                         <div class="form-group row" id="select_upazila_div">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Upazila')); ?></label>

                            <div class="col-md-6">
                                <select class="form-control form-control-lg select_upazila_union <?php echo e($errors->has('upozila_id') ? ' is-invalid' : ''); ?>" name="upozila_id" id="select_upazila">
                                </select>

                                <span class="focus-border"></span> 
                                <?php if($errors->has('upozila_id')): ?>
                                    <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('upozila_id')); ?></strong>
                                    </span> 
                                <?php endif; ?>
                            </div>
                        </div>

                         <div class="form-group row" id="select_union_div">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Union')); ?></label>

                            <div class="col-md-6">
                                <select class="form-control form-control-lg <?php echo e($errors->has('union_id') ? ' is-invalid' : ''); ?>" name="union_id" id="select_union">
                                </select>
                                <span class="focus-border"></span> 
                                <?php if($errors->has('union_id')): ?>
                                    <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('union_id')); ?></strong>
                                    </span> 
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Location')); ?></label>

                            <div class="col-md-6">
                                <textarea name="location" class="form-control<?php echo e($errors->has('location') ? ' is-invalid' : ''); ?>" id="location" cols="70" rows="5"></textarea>

                                <span class="focus-border"></span> 
                                <?php if($errors->has('location')): ?>
                                    <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('location')); ?></strong>
                                    </span> 
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('PatientMedical History')); ?></label>

                            <div class="col-md-6">
                                <textarea name="patient_medical_history" class="form-control<?php echo e($errors->has('patient_medical_history') ? ' is-invalid' : ''); ?>" id="patient_medical_history" cols="70" rows="5"></textarea>

                                <span class="focus-border"></span> 
                                <?php if($errors->has('patient_medical_history')): ?>
                                    <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('patient_medical_history')); ?></strong>
                                    </span> 
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Submit Request')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
     </section>
   <?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\blood_donation\resources\views/find_blood.blade.php ENDPATH**/ ?>