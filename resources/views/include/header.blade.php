<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{$setting->site_name}} | {{$setting->site_title}}</title>

    <link rel="shortcut icon" href="{{asset('/')}}{{ $setting->fav }}" />
    {{-- <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet"> --}}
    <link rel="shortcut icon" href="{{asset('frontend/assets/images/fav.jpg')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/fontawsom-all.min.css')}}">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="{{asset('frontend/assets/plugins/grid-gallery/css/grid-gallery.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/style.css')}}" />
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
                                    
                                @guest
            <li><a style="color:#fff;" href="{{ route('login') }}">Login </a></li>
          @else
          
          <li><i class="fas fa-user"></i>{{Auth::user()->name}}<span>|</span></li>
            <li>
              <a style="color:#fff;" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </li>
          @endguest


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="menu-jk" class="header-bottom">
                <div class="container">
                    <div class="row nav-row">
                        <div class="col-md-3 logo">
                            <img src="{{asset('/')}}{{$setting->logo}}" alt="">
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
                                        <a class="nav-link" href="{{url('/')}}">Home
                                            </a>
                                        </li>

                                        @if (Auth::user() && Auth::user()->role_id==2)
                                            <li class="nav-item active">
                                                <a class="nav-link" href="{{route('user.dashboard')}}">Dashboard
                                                </a>
                                            </li>
                                        @endif

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
                                @if (Auth::user() && Auth::user()->role_id == 2) {
                                    <div>
                                        <ul>
                                            <a href="{{route('donate_blood')}}"><li><i class="fas fa-bell"></i> <span style="font-size: 20px;">(@if(!empty(@$notifications)) {{@$notifications}}@else 0 @endif)</span></li></a>
                                        </ul>
                                    </div>
                                @endif
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        