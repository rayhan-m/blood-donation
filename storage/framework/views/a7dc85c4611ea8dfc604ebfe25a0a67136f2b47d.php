
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php $__env->startSection('mainContent'); ?>

    
        <div class="breadcrumb">
            <ul>
                <li><a href="#">System Setting</a></li>
                <li>General Setting</li>
            </ul>
        </div>
    <div class="separator-breadcrumb border-top"></div>

    <div class="row">
        <div class="col-md-4" style="text-align: center;">
            <div class="col-md-12 grid-margin stretch-card mb-40">
                <div class="card">
                    <div class="card-body">
                        <img style="height: 40px; width:140px; margin-bottom: 20px;" src="<?php echo e(asset('/')); ?><?php echo e($data->logo); ?>" class="img-lg rounded" alt="profile image" />
                        <div class="d-flex flex-row">
                            
                            
                            <div class="ml-2">
                                <form method="POST" action="<?php echo e(route('update-logo')); ?>" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <input type="file" name="logo" class="file-upload-default">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Logo">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                            </span>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary mt-20" type="submit"> Change Logo</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <img style="height: 80px; width:80px; margin-bottom: 20px;" src="<?php echo e(asset('/')); ?><?php echo e($data->fav); ?>" class="img-lg rounded" alt="profile image" />
                        <div class="d-flex flex-row">
                            
                            <div class="ml-2">
                                <form method="POST" action="<?php echo e(route('update-fav')); ?>" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <input type="file" name="fav" class="file-upload-default">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Icon">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                            </span>
                                        </div>
                                    </div>

                                    <button class="btn btn-primary mt-20" type="submit"> Change Icon</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--x-editable starts-->

        <div class="col-md-8">

            <div class="card">
                <div class="card-body">
                    <button type="button" style="float: right;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Edit</button>
                    <h4 class="card-title">General Setting</h4>
                    <div class="template-demo">
                        <div class="form-group row">
                            <div class="col-3 col-lg-3">
                                <label class="col-form-label">Site Name</label>
                            </div>
                            <div class="col-9 col-lg-9">
                                <label class="col-form-label"><?php echo e($data->site_name); ?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3 col-lg-3">
                                <label class="col-form-label">Site Title</label>
                            </div>
                            <div class="col-9 col-lg-9">
                                <label class="col-form-label"><?php echo e($data->site_title); ?></label>
                            </div>
                        </div>
                    
                        <div class="form-group row">
                            <div class="col-3 col-lg-3">
                                <label class="col-form-label">Location</label>
                            </div>
                            <div class="col-9 col-lg-9">
                                <label class="col-form-label"><?php echo e($data->location); ?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3 col-lg-3">
                                <label class="col-form-label">Email</label>
                            </div>
                            <div class="col-9 col-lg-9">
                                <label class="col-form-label"><?php echo e($data->email); ?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3 col-lg-3">
                                <label class="col-form-label">Phone No</label>
                            </div>
                            <div class="col-9 col-lg-9">
                                <label class="col-form-label"><?php echo e($data->phone); ?></label>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-3 col-lg-3">
                                <label class="col-form-label">Copyright Text</i>
                                </label>
                            </div>
                            <div class="col-9 col-lg-9">
                                <label class="col-form-label"><?php echo e($data->copyright_text); ?></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--x-editable ends-->
        </div>
    </div>

    <!-- Modal starts -->
<div class="modal modal_pos" id="exampleModal" role="dialog">
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content" style="width:125%;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit General Settings Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo e(route('update-general-setting')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?> 
                    <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
                    <div class="row mb-20">
                        <div class="col-lg-6">
                            <div class="input-effect">
                                <input class="primary-input form-control<?php echo e($errors->has('site_name') ? ' is-invalid' : ''); ?>" type="text" name="site_name" placeholder="Site Name *" value="<?php echo e($data->site_name); ?>" autocomplete="off">
                                <span class="focus-border"></span> <?php if($errors->has('site_name')): ?>
                                <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($errors->first('site_name')); ?></strong>
                        </span> <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-effect">
                                <input class="primary-input form-control<?php echo e($errors->has('site_title') ? ' is-invalid' : ''); ?>" type="text" placeholder="Site Title *" name="site_title" value="<?php echo e($data->site_title); ?>" autocomplete="off">
                                <span class="focus-border"></span> <?php if($errors->has('site_title')): ?>
                                <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($errors->first('site_title')); ?></strong>
                        </span> <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-20">
                        <div class="col-lg-6">
                            <div class="input-effect">
                                <input class="primary-input form-control<?php echo e($errors->has('location') ? ' is-invalid' : ''); ?>" type="text" name="location" placeholder="Location *" value="<?php echo e($data->location); ?>" autocomplete="off">
                                <span class="focus-border"></span> <?php if($errors->has('location')): ?>
                                <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($errors->first('location')); ?></strong>
                        </span> <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-effect">
                                <input class="primary-input form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" type="email" placeholder="Email *" name="email" value="<?php echo e($data->email); ?>" autocomplete="off">

                                <span class="focus-border"></span> <?php if($errors->has('email')): ?>
                                <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($errors->first('email')); ?></strong>
                        </span> <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-20">
                        <div class="col-lg-4">
                            <div class="input-effect">
                                <input class="primary-input form-control<?php echo e($errors->has('phone') ? ' is-invalid' : ''); ?>" type="text" onkeyup="isNumberKeyDecimal(this);"  placeholder="Phone No *" name="phone" value="<?php echo e($data->phone); ?>" autocomplete="off">
                                <span class="focus-border"></span> <?php if($errors->has('phone')): ?>
                                <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($errors->first('phone')); ?></strong>
                        </span> <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-20">
                        <div class="col-lg-12">
                            <div class="input-effect">
                                <textarea class="primary-input form-control" cols="0" rows="4" name="copyright_text" placeholder="Copyright Text" id="copyright_text"><?php echo e($data->copyright_text); ?></textarea>
                                <span class="focus-border textarea"></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Ends -->
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\blood_donation\resources\views/admin/general_setting.blade.php ENDPATH**/ ?>