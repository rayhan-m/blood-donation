@extends('admin.master')

@section('mainContent')

                <div class="breadcrumb">
                    <ul>
                        <li><a href="#">Dashboard</a></li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <!-- ICON BG-->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                            <div class="card-body text-center"><i class="i-Add-User"></i>
                                <div class="content">
                                    <p class="text-muted mt-2 mb-0">Total Donar</p>
                                    <p class="text-primary text-24 line-height-1 mb-2">{{ @$total_user}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                            <div class="card-body text-center"><i class="i-Add-User"></i>
                                <div class="content">
                                    <p class="text-muted mt-2 mb-0">Total Donar</p>
                                <p class="text-primary text-24 line-height-1 mb-2">{{ @$total_user}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                            <div class="card-body text-center"><i class="i-Add-User"></i>
                                <div class="content">
                                    <p class="text-muted mt-2 mb-0">Total Donar</p>
                                    <p class="text-primary text-24 line-height-1 mb-2">{{ @$total_user}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                            <div class="card-body text-center"><i class="i-Add-User"></i>
                                <div class="content">
                                    <p class="text-muted mt-2 mb-0">Total Donar</p>
                                    <p class="text-primary text-24 line-height-1 mb-2">{{ @$total_user}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card o-hidden mb-4">
                                    <div class="card-header d-flex align-items-center border-0" style="background-color: #fff;">
                                        <h3 class="w-50 float-left card-title m-0">New Donors</h3>
                                        {{-- <div class="dropdown dropleft text-right w-50 float-right">
                                            <button class="btn bg-gray-100" id="dropdownMenuButton1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="nav-icon i-Gear-2"></i></button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1"><a class="dropdown-item" href="#">Add new user</a><a class="dropdown-item" href="#">View All users</a><a class="dropdown-item" href="#">Something else here</a></div>
                                        </div> --}}
                                    </div>
                                    <div>
                                        <div class="table-responsive">
                                            <table class="table text-center" id="user_table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Avatar</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $count = 1;
                                                    @endphp
                                                    @foreach ($users as $new_user)
                                                        <tr>
                                                            <th scope="row">{{@$count++}}</th>
                                                            <td>{{@$new_user->name}}</td>
                                                            <td><img class="rounded-circle m-0 avatar-sm-table" src="{{ file_exists(@$new_user->photo) ? asset($new_user->photo) : asset('backend/uploads/donar/donar.png') }}" alt="" /></td>
                                                            <td>{{@$new_user->email}}</td>
                                                            <td> @if (@$new_user->active_status == 1)<span class="badge badge-success">  Active </span> @else <span class="badge badge-warning">  Inactive </span>  @endif </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                                             <div class="row">
                            <div class="col-md-12">
                                <div class="card o-hidden mb-4">
                                    <div class="card-header d-flex align-items-center border-0" style="background-color: #fff;">
                                        <h3 class="w-50 float-left card-title m-0">New Donors</h3>
                                        {{-- <div class="dropdown dropleft text-right w-50 float-right">
                                            <button class="btn bg-gray-100" id="dropdownMenuButton1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="nav-icon i-Gear-2"></i></button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1"><a class="dropdown-item" href="#">Add new user</a><a class="dropdown-item" href="#">View All users</a><a class="dropdown-item" href="#">Something else here</a></div>
                                        </div> --}}
                                    </div>
                                    <div>
                                        <div class="table-responsive">
                                            <table class="table text-center" id="user_table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Avatar</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $count = 1;
                                                    @endphp
                                                    @foreach ($users as $new_user)
                                                        <tr>
                                                            <th scope="row">{{@$count++}}</th>
                                                            <td>{{@$new_user->name}}</td>
                                                            <td><img class="rounded-circle m-0 avatar-sm-table" src="{{ file_exists(@$new_user->photo) ? asset($new_user->photo) : asset('backend/uploads/donar/donar.png') }}" alt="" /></td>
                                                            <td>{{@$new_user->email}}</td>
                                                            <td> @if (@$new_user->active_status == 1)<span class="badge badge-success">  Active </span> @else <span class="badge badge-warning">  Inactive </span>  @endif </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                        
                </div><!-- end of main-content -->

    @endsection