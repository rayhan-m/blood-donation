@extends('admin.master')
@section('mainContent')


<div class="breadcrumb">
    <ul>
        <li><a href="#">Dashboard</a></li>
        <li>Specfic Donar List</li>
    </ul>
</div>
<div class=" border-top"></div>
<div class="mt-20 mb-20">
    <a class="btn btn-primary" href="{{route('send_notification',[@$data['fb_id'],@$data['bg_id'],$data['div_id'],$data['dis_id'],$data['upa_id'],$data['uni_id']])}}">Send Notification</a>
    <a class="btn btn-primary" href="{{route('send_notification_email',[@$data['bg_id'],$data['div_id'],$data['dis_id'],$data['upa_id'],$data['uni_id']])}}">Send Notification Email</a>
</div>

<!-- Table row-->
<div class="row mb-4">
    <div class="col-md-12 mb-4">
        <div class="card text-left">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="display table table-striped table-bordered" 
                        style="width:100%; font-size:12px;">
                        <thead>
                            <tr>
                                <th style="width:5%">SL</th>
                                <th style="width:15%">Name</th>
                                <th style="width:10%">Blood Group</th>
                                <th style="width:15%">Email</th>
                                <th style="width:10%">Phone</th>
                                <th style="width:10%">Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $count=1;
                            @endphp
                            @foreach ($specfic_donars as $specfic_donar)
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td>{{$specfic_donar->name}}</td>
                                <td>@if (@$specfic_donar->blood_group_id == 1) AB -
                                    @elseif(@$specfic_donar->blood_group_id == 2) AB+
                                    @elseif(@$specfic_donar->blood_group_id == 3) A-
                                    @elseif(@$specfic_donar->blood_group_id == 4) A+
                                    @elseif(@$specfic_donar->blood_group_id == 5) B-
                                    @elseif(@$specfic_donar->blood_group_id == 6) B+
                                    @elseif(@$specfic_donar->blood_group_id == 7) O-
                                    @elseif(@$specfic_donar->blood_group_id == 8) O+
                                    @endif    
                                </td>
                                <td>{{$specfic_donar->email}}</td>
                                <td>{{$specfic_donar->phone}}</td>
                                <td style="text-align:center;"> <img height="80px;" width="80px;"  src="{{ file_exists(@$specfic_donar->image) ? asset(@$specfic_donar->image) : asset('backend/uploads/donar/donar.png') }}" class="img img-fluid">  </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
   

    @endsection