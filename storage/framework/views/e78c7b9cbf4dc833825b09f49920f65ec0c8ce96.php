<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo e($setting->site_name); ?> | <?php echo e($setting->site_title); ?></title>

    <link rel="shortcut icon" href="<?php echo e(asset('/')); ?><?php echo e($setting->fav); ?>" />
    
    <link rel="shortcut icon" href="<?php echo e(asset('frontend/assets/images/fav.jpg')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/fontawsom-all.min.css')); ?>">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/plugins/grid-gallery/css/grid-gallery.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend/assets/css/style.css')); ?>" />
</head>

<body>
        <header class="continer-fluid ">
            <div class="header-top">
                <div class="container">
                    <div class="row col-det">
                        <div class="col-lg-6 d-none d-lg-block">
                            <ul class="ulleft">
                                <li>
                                    <i class="far fa-envelope"></i>
                                    sales@smarteyeapps.com
                                    <span>|</span></li>
                                <li>
                                    <i class="far fa-clock"></i>
                                    Service Time : 12:AM</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <ul class="ulright">
                                <li>
                                    
                                <?php if(auth()->guard()->guest()): ?>
            <li><a style="color:#fff;" href="<?php echo e(route('login')); ?>">Login </a></li>
          <?php else: ?>
          
          <li><i class="fas fa-user"></i><?php echo e(Auth::user()->name); ?><span>|</span></li>
            <li>
              <a style="color:#fff;" href="<?php echo e(route('logout')); ?>"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                  <?php echo e(__('Logout')); ?>

              </a>

              <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                  <?php echo csrf_field(); ?>
              </form>
            </li>
          <?php endif; ?>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="menu-jk" class="header-bottom">
                <div class="container">
                    <div class="row nav-row">
                        <div class="col-md-3 logo">
                            <img src="<?php echo e(asset('/')); ?><?php echo e($setting->logo); ?>" alt="">
                        </div>
                        <div class="col-md-9 nav-col">
                            <nav class="navbar navbar-expand-lg navbar-light">

                                <button
                                    class="navbar-toggler"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#navbarNav"
                                    aria-controls="navbarNav"
                                    aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                        <li class="nav-item active">
                                        <a class="nav-link" href="<?php echo e(url('/')); ?>">Home
                                            </a>
                                        </li>

                                        <?php if(Auth::user() && Auth::user()->role_id==2): ?>
                                            <li class="nav-item active">
                                                <a class="nav-link" href="<?php echo e(route('user.dashboard')); ?>">Dashboard
                                                </a>
                                            </li>
                                        <?php endif; ?>

                                        <li class="nav-item">
                                            <a class="nav-link" href="#about">About Us</a>
                                        </li>
                                       
                                        <li class="nav-item">
                                            <a class="nav-link" href="#gallery">Gallery</a>
                                        </li>
                                         <li class="nav-item">
                                            <a class="nav-link" href="#process">Process</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#contact">Contact US</a>
                                        </li>
                                    </ul>
                                </div>
                                <?php if(Auth::user() && Auth::user()->role_id == 2): ?> {
                                    <div>
                                        <ul>
                                            <a href="<?php echo e(route('donate_blood')); ?>"><li><i class="fas fa-bell"></i> <span style="font-size: 20px;">(<?php if(!empty(@$notifications)): ?> <?php echo e(@$notifications); ?><?php else: ?> 0 <?php endif; ?>)</span></li></a>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <?php /**PATH C:\laragon\www\blood_donation\resources\views/include/header.blade.php ENDPATH**/ ?>