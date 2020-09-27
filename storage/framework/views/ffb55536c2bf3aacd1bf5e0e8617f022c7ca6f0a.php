<?php
    $setting=App\GeneralSetting::where('active_status',1)->first();
    $profile=App\User::where('id','=',Auth::user()->id)->first();
?>
<?php echo $__env->make('admin.include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('admin.include.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('mainContent'); ?>

<?php echo $__env->make('admin.include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>      <?php /**PATH C:\laragon\www\blood_donation\resources\views/admin/master.blade.php ENDPATH**/ ?>