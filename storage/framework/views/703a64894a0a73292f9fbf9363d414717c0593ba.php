<?php
    $setting=App\GeneralSetting::where('active_status',1)->first();
?>


<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="auth-logo text-center mb-4"><img src="<?php echo e(asset('/')); ?><?php echo e(@$setting->logo); ?>" alt=""></div>
            <div class="card">
                <div class="card-header"><?php echo e(__('Register')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('register')); ?>">
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
                                <?php $__errorArgs = ['blood_group_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Name')); ?></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>

                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Phone')); ?></label>

                            <div class="col-md-6">
                                <input id="phone" type="phone" class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="phone" value="<?php echo e(old('phone')); ?>" required autocomplete="phone">

                                <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">

                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password">

                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Division')); ?></label>
                            <?php
                                $divisions=App\Division::get();
                            ?>
                            <div class="col-md-6">
                                <select  name="division_id" required class="form-control form-control-lg" id="select_division">
                                    <option value="">Select Division</option>
                                    <?php $__currentLoopData = $divisions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $division): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($division->id); ?>"><?php echo e($division->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php $__errorArgs = ['division_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                         <div class="form-group row" id="select_distric_div">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('District')); ?></label>

                            <div class="col-md-6">
                                <select class="form-control form-control-lg select_distric_for_upazila" name="district_id" id="select_distric">
                                    <option>Select District</option>
                                </select>

                                <?php $__errorArgs = ['district_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                         <div class="form-group row" id="select_upazila_div">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Upazila')); ?></label>

                            <div class="col-md-6">
                                <select class="form-control form-control-lg select_upazila_union" name="upozila_id" id="select_upazila">
                                    <option>Select Upazila</option>
                                </select>

                                <?php $__errorArgs = ['upozila_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                         <div class="form-group row" id="select_union_div">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Union')); ?></label>

                            <div class="col-md-6">
                                <select class="form-control form-control-lg" name="union_id" id="select_union">
                                    <option>Select Upazila</option>
                                </select>
                                <?php $__errorArgs = ['union_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Medical History')); ?></label>

                            <div class="col-md-6">
                                <textarea name="medical_history" id="medical_history" cols="40" rows="5"></textarea>

                                <?php $__errorArgs = ['medical_history'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Register')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
  // Get district list
$(document).ready(function () {

    $("#select_division").change(function () {
        var url = $('#url').val();
       
        var formData = {
            id: $(this).val()
        };
        // console.log(formData);
        // get section for student
        $.ajax({
            type: "GET",
            data: formData,
            dataType: 'json',
            url: url + '/' + 'ajaxDistricList',
            success: function (data) {

              console.log(data);
                var a = '';
               $.each(data, function (i, item) {
                    if (item.length) {
                        $('#select_distric').find('option').not(':first').remove();
                        $('#select_distric_div ul').find('li').not(':first').remove();

                        $.each(item, function (i, distric) {
                            $('#select_distric').append($('<option>', {
                                value: distric.id,
                                text: distric.name
                            }));

                            $("#select_distric_div ul").append("<li data-value='" + distric.id + "' class='option'>" + distric.name + "</li>");
                        });
                    } else {
                        $('#select_distric_div .current').html('SELECT DISTRIC *');
                        $('#select_distric').find('option').not(':first').remove();
                        $('#select_distric_div ul').find('li').not(':first').remove();
                    }
                });
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });

});

//Get Upazila List
$(document).ready(function () {

    $(".select_distric_for_upazila").change(function () {
        var url = $('#url').val();
       
        var formData = {
            id: $(this).val()
        };
    //    console.log(formData);
        // get section for student
        $.ajax({
            type: "GET",
            data: formData,
            dataType: 'json',
            url: url + '/' + 'ajaxUpazilaList',
            success: function (data) {

                // console.log(data);
                var a = '';
               $.each(data, function (i, item) {
                    if (item.length) {
                        $('#select_upazila').find('option').not(':first').remove();
                        $('#select_upazila_div ul').find('li').not(':first').remove();

                        $.each(item, function (i, distric) {
                            $('#select_upazila').append($('<option>', {
                                value: distric.id,
                                text: distric.name
                            }));

                            $("#select_upazila_div ul").append("<li data-value='" + distric.id + "' class='option'>" + distric.name + "</li>");
                        });
                    } else {
                        $('#select_upazila_div .current').html('SELECT DISTRIC *');
                        $('#select_upazila').find('option').not(':first').remove();
                        $('#select_upazila_div ul').find('li').not(':first').remove();
                    }
                });
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });

});
//Get Union List
$(document).ready(function () {

    $(".select_upazila_union").change(function () {
        var url = $('#url').val();
       
        var formData = {
            id: $(this).val()
        };
    //    console.log(formData);
        // get section for student
        $.ajax({
            type: "GET",
            data: formData,
            dataType: 'json',
            url: url + '/' + 'ajaxUnionList',
            success: function (data) {

                // console.log(data);
                var a = '';
               $.each(data, function (i, item) {
                    if (item.length) {
                        $('#select_union').find('option').not(':first').remove();
                        $('#select_union_div ul').find('li').not(':first').remove();

                        $.each(item, function (i, union) {
                            $('#select_union').append($('<option>', {
                                value: union.id,
                                text: union.name
                            }));

                            $("#select_union_div ul").append("<li data-value='" + union.id + "' class='option'>" + union.name + "</li>");
                        });
                    } else {
                        $('#select_union_div .current').html('SELECT DISTRIC *');
                        $('#select_union').find('option').not(':first').remove();
                        $('#select_union_div ul').find('li').not(':first').remove();
                    }
                });
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });

});

    </script>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\blood_donation\resources\views/auth/register.blade.php ENDPATH**/ ?>