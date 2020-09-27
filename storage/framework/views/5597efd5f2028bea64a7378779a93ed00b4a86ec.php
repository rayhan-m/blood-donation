
<?php
    $setting=App\GeneralSetting::where('active_status',1)->first();
    if (Auth::user() && Auth::user()->role_id == 2) {
        $notifications = DB::table('notifications')->select('id')->where('user_id',Auth::user()->id)->where('is_seen',0)->count();
        // @dd($notifications);
    }
    
?>
<?php echo $__env->make('include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('mainContent'); ?>

<?php echo $__env->make('include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>      <?php /**PATH C:\laragon\www\blood_donation\resources\views/master.blade.php ENDPATH**/ ?>