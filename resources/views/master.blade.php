
@php
    $setting=App\GeneralSetting::where('active_status',1)->first();
    if (Auth::user() && Auth::user()->role_id == 2) {
        $notifications = DB::table('notifications')->select('id')->where('user_id',Auth::user()->id)->where('is_seen',0)->count();
        // @dd($notifications);
    }
    
@endphp
@include('include.header')

@yield('mainContent')

@include('include.footer')      