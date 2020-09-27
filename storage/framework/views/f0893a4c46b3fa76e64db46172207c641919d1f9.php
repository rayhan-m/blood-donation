<div class="side-nav">
    <div class="main-menu">
        <ul class="metismenu" id="menu">
        <li class="Ul_li--hover"><a href="<?php echo e(route('admin.dashboard')); ?>"><ion-icon class="text-20 mr-2 text-muted" name="speedometer-outline"></ion-icon><span class="item-name text-15 text-muted"> Dashboard</span></a>
            </li>
            
            <li class="Ul_li--hover"><a href="<?php echo e(route('blood-donar-list')); ?>"><ion-icon class="text-20 mr-2 text-muted" name="receipt-outline"></ion-icon><span class="item-name text-15 text-muted">Donar List</span></a>
            </li>

            <li class="Ul_li--hover"><a class="has-arrow"><ion-icon class="text-20 mr-2 text-muted" name="build-outline"></ion-icon><span class="item-name text-15 text-muted">Blood Request</span></a>
                <ul class="mm-collapse">
                    <li class="item-name"><a href="<?php echo e(route('blood-request-active')); ?>"><i class="nav-icon i-Error-404-Window"></i><span class="item-name">Active Request</span></a></li>
                </ul>
                <ul class="mm-collapse">
                    <li class="item-name"><a href="<?php echo e(route('blood-request-old')); ?>"><i class="nav-icon i-Error-404-Window"></i><span class="item-name">Old Request</span></a></li>
                </ul>
            </li>
            <li class="Ul_li--hover"><a class="has-arrow"><ion-icon class="text-20 mr-2 text-muted" name="build-outline"></ion-icon><span class="item-name text-15 text-muted">System Setting</span></a>
                <ul class="mm-collapse">
                    <li class="item-name"><a href="<?php echo e(route('general_setting')); ?>"><i class="nav-icon i-Error-404-Window"></i><span class="item-name">General Setting</span></a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<div class="ps__rail-x" style="left: 0px; bottom: 0px;">
    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
</div>
<div class="ps__rail-y" style="top: 0px; height: 404px; right: 0px;">
    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 325px;"></div>
</div>
<div class="ps__rail-x" style="left: 0px; bottom: 0px;">
    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
</div>
<div class="ps__rail-y" style="top: 0px; height: 404px; right: 0px;">
    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 325px;"></div>
</div>
</div>
<!--  side-nav-close -->
</div>

<div class="switch-overlay"></div>
<div class="main-content-wrap mobile-menu-content bg-off-white m-0">
    <header class="main-header bg-white d-flex justify-content-between p-2">
        <div class="header-toggle">
            <div class="menu-toggle mobile-menu-icon">
                <div></div>
                <div></div>
                <div></div>
            </div><i class="i-Add-UserStar mr-3 text-20 cursor-pointer" data-toggle="tooltip" data-placement="top" title="" data-original-title="Todo"></i><i class="i-Speach-Bubble-3 mr-3 text-20 cursor-pointer" data-toggle="tooltip" data-placement="top" title="" data-original-title="Chat"></i><i class="i-Email mr-3 text-20 mobile-hide cursor-pointer" data-toggle="tooltip" data-placement="top" title="" data-original-title="Inbox"></i><i class="i-Calendar-4 mr-3 mobile-hide text-20 cursor-pointer" data-toggle="tooltip" data-placement="top" title="" data-original-title="Calendar"></i><i class="i-Checkout-Basket mobile-hide mr-3 text-20 cursor-pointer" data-toggle="tooltip" data-placement="top" title="" data-original-title="Calendar"></i>
        </div>
        <div class="header-part-right">
            <!-- Full screen toggle--><i class="i-Full-Screen header-icon d-none d-sm-inline-block" data-fullscreen=""></i>
            <!-- Grid menu Dropdown-->
            
                <a href="<?php echo e(route('logout')); ?>"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                <?php echo e(__('Logout')); ?>

            </a>

            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                <?php echo csrf_field(); ?>
            </form>
            
        <a href="<?php echo e(url('admin/profile')); ?>"><img height="35px" width="35px" style="margin-left: 20px;" src="<?php echo e(file_exists(@$profile->image) ? asset(@$profile->image) : asset('backend/uploads/donar/donar.png')); ?>" alt=""></a>
        </div>
    </header><!-- ============ Body content start ============= -->
<div class="main-content pt-4"><?php /**PATH C:\laragon\www\blood_donation\resources\views/admin/include/sidebar.blade.php ENDPATH**/ ?>