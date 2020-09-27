
@extends('master')

@section('mainContent')
      <!-- ################# Slider Starts Here#######################--->

    <section class="page-header" data-stellar-background-ratio="1.2" style="background-position: 0% -80px;">

            <div class="container">

                <div class="row">

                    <div class="col-sm-12 text-center">

                        <h3 style="margin-top:-50px; font-size:24px;">
                            Previous Record
                        </h3>

                        <p class="page-breadcrumb">
                            <a style="margin-top:-50px;" href="#">Home</a> / Previous Record
                        </p>


                    </div>

                </div> <!-- end .row  -->

            </div> <!-- end .container  -->

        </section>
    
    
     <!-- ################# Donation Process Start Here #######################--->
     
     <section id="process" class="donation-care"  style="margin-bottom: 100px;">
        <h3 style="text-align: center; margin-bottom:20px;">Previous Record List</h3>
         <div class="container">
            <div class="row">
                
                 <table class="display table table-striped table-bordered" id="zero_configuration_table"
                        style="width:100%; font-size:12px;">
                        <thead>
                            <tr>
                                <th style="width:5%">SL</th>
                                <th style="width:15%">Request By</th>
                                <th style="width:10%">Blood Group</th>
                                <th style="width:10%">Division</th>
                                <th style="width:10%">District</th>
                                <th style="width:10%">Is Approved</th>
                                <th style="width:10%">Active Status</th>
                                <th style="width:20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $count=1;
                            @endphp
                            @foreach ($request_details as $request_detail)
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td>{{$request_detail->name}}</td>
                                <td>
                                    @if (@$request_detail->blood_group_id == 1) AB -
                                    @elseif(@$request_detail->blood_group_id == 2) AB+
                                    @elseif(@$request_detail->blood_group_id == 3) A-
                                    @elseif(@$request_detail->blood_group_id == 4) A+
                                    @elseif(@$request_detail->blood_group_id == 5) B-
                                    @elseif(@$request_detail->blood_group_id == 6) B+
                                    @elseif(@$request_detail->blood_group_id == 7) O-
                                    @elseif(@$request_detail->blood_group_id == 8) O+
                                    @endif    
                                </td>
                                <td>{{$request_detail->division_name}}</td>
                                <td>{{$request_detail->district_name}}</td>
                                <td>
                                    @if (@$request_detail->is_approved==1)
                                        <label style="font-size: 14px;" class="badge badge-success" >Approved</label>
                                    @else
                                        <label style="font-size: 14px;" class="badge badge-danger">Pending</label>
                                    @endif
                                </td>
                                <td>
                                    @if (@$request_detail->active_status==1)
                                        <label style="font-size: 14px;" class="badge badge-success" >Active</label>
                                    @else
                                        <label style="font-size: 14px;" class="badge badge-danger">Deactive</label>
                                    @endif
                                </td>
                                <td style="text-align:center;">
                                    <a class="btn btn-primary"  href="{{route('blood_request_details',[@$request_detail->id])}}" >View Details</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
         </div>
     </section>
   @endsection