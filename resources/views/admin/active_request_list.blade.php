@extends('admin.master')
@section('mainContent')


<div class="breadcrumb">
    <ul>
        <li><a href="#">Dashboard</a></li>
        <li>Active Request List</li>
    </ul>
</div>
<div class=" border-top"></div>
{{-- <div class="mt-20 mb-20">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> <span>+</span> Buy Food</button>
</div> --}}

<!-- Table row-->
<div class="row mb-4">
    <div class="col-md-12 mb-4">
        <div class="card text-left">
            <div class="card-body">
                <div class="table-responsive">
                   <table class="display table table-striped table-bordered" id="zero_configuration_table"
                        style="width:100%; font-size:12px;">
                        <thead>
                            <tr>
                                <th style="width:5%">SL</th>
                                <th style="width:15%">Request By</th>
                                <th style="width:10%">Blood Group</th>
                                {{-- <th style="width:10%">Division</th> --}}
                                <th style="width:10%">District</th>
                                <th style="width:20%">Is Approved</th>
                                <th style="width:10%">Active Status</th>
                                <th style="width:20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $count=1;
                            @endphp
                            @foreach ($active_requests as $active_request)
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td>{{$active_request->name}}</td>
                                <td>
                                    @if (@$active_request->blood_group_id == 1) AB -
                                    @elseif(@$active_request->blood_group_id == 2) AB+
                                    @elseif(@$active_request->blood_group_id == 3) A-
                                    @elseif(@$active_request->blood_group_id == 4) A+
                                    @elseif(@$active_request->blood_group_id == 5) B-
                                    @elseif(@$active_request->blood_group_id == 6) B+
                                    @elseif(@$active_request->blood_group_id == 7) O-
                                    @elseif(@$active_request->blood_group_id == 8) O+
                                    @endif    
                                </td>
                                {{-- <td>{{$active_request->division_name}}</td> --}}
                                <td>{{$active_request->district_name}}</td>
                                <td>
                                    @if (@$active_request->is_approved==1)
                                        <label style="font-size: 14px;" class="badge badge-success" >Approved</label>
                                    @else
                                        <label style="font-size: 14px;" class="badge badge-danger">Pending</label>
                                    @endif
                                    <div class="dropdown" style="float: left; margin-right:20px;">
                                        <button class="btn btn-primary dropdown-toggle" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Select

                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 33px, 0px);">
                                            <a class="dropdown-item"  href="{{ url('admin/request-status/'.@$active_request->id.'/'.'1') }}" >Approved</a>
                                            <a class="dropdown-item"  href="{{ url('admin/request-status/'.@$active_request->id.'/'.'0') }}">Pending</a>
                                        </div >
                                    </div>

                                </td>
                                <td>
                                    @if (@$active_request->active_status==1)
                                        <label style="font-size: 14px;" class="badge badge-success" >Active</label>
                                    @else
                                        <label style="font-size: 14px;" class="badge badge-danger">Deactive</label>
                                    @endif
                                </td>
                                <td style="text-align:center;">
                                    <a class="btn btn-outline-primary"  href="{{route('request_details',[@$active_request->id])}}" >View Details</a>
                                    <a class="btn btn-outline-primary"  href="{{route('find_specific_donors',[@$active_request->id,@$active_request->blood_group_id,@$active_request->division_id,@$active_request->district_id,@$active_request->upazila_id,@$active_request->union_id])}}" >Find Donors</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
   

    @endsection