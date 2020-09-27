@extends('admin.master')
@section('mainContent')


<div class="breadcrumb">
    <ul>
        <li><a href="#">Dashboard</a></li>
        <li>Old Blood Request List</li>
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
                                <th style="width:20%">Request By</th>
                                <th style="width:10%">Blood Group</th>
                                <th style="width:10%">Division</th>
                                <th style="width:10%">District</th>
                                <th style="width:10%">Is Approved</th>
                                <th style="width:10%">Active Status</th>
                                <th style="width:15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $count=1;
                            @endphp
                            @foreach ($old_requests as $old_request)
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td>hfghfgh</td>
                                <td>ghdfghdfhg</td>
                                <td>ghdfghdfhg</td>
                                <td>ghdfghdfhg</td>
                                {{-- <td>{{$old_request->name}}</td>
                                <td>{{$old_request->blood_group_id}}</td>
                                <td>{{$old_request->division_name}}</td>
                                <td>{{$old_request->district_name}}</td> --}}
                                <td>
                                    @if (@$old_request->is_approved==1)
                                        <label style="font-size: 14px;" class="badge badge-success" >Approved</label>
                                    @else
                                        <label style="font-size: 14px;" class="badge badge-danger">Pending</label>
                                    @endif


                                </td>
                                <td>
                                    @if (@$old_request->active_status==1)
                                        <label style="font-size: 14px;" class="badge badge-success" >Active</label>
                                    @else
                                        <label style="font-size: 14px;" class="badge badge-danger">Deactive</label>
                                    @endif
                                </td>
                                <td style="text-align:center;">
                                    <a class="btn btn-outline-primary"  href="#" >View Details</a>
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