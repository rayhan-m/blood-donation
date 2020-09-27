
@extends('master')

@section('mainContent')
      <!-- ################# Slider Starts Here#######################--->

    <section class="page-header" data-stellar-background-ratio="1.2" style="background-position: 0% -80px;">

            <div class="container">

                <div class="row">

                    <div class="col-sm-12 text-center">

                        <h3 style="margin-top:-50px; font-size:24px;">
                            Donate Blood
                        </h3>

                        <p class="page-breadcrumb">
                            <a style="margin-top:-50px;" href="#">Home</a> / Donate Blood
                        </p>


                    </div>

                </div> <!-- end .row  -->

            </div> <!-- end .container  -->

        </section>
    
    
     <!-- ################# Donation Process Start Here #######################--->
     
     <section id="process" class="donation-care"  style="margin-bottom: 100px;">
        <h3 style="text-align: center; margin-bottom:20px;">Blood Donate List</h3>
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
                                <th style="width:20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $count=1;
                            @endphp
                            @foreach ($donate_request_lists as $donate_request_list)
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td>{{$donate_request_list->name}}</td>
                                <td>
                                    @if (@$donate_request_list->blood_group_id == 1) AB -
                                    @elseif(@$donate_request_list->blood_group_id == 2) AB+
                                    @elseif(@$donate_request_list->blood_group_id == 3) A-
                                    @elseif(@$donate_request_list->blood_group_id == 4) A+
                                    @elseif(@$donate_request_list->blood_group_id == 5) B-
                                    @elseif(@$donate_request_list->blood_group_id == 6) B+
                                    @elseif(@$donate_request_list->blood_group_id == 7) O-
                                    @elseif(@$donate_request_list->blood_group_id == 8) O+
                                    @endif    
                                </td>
                                <td>{{$donate_request_list->division_name}}</td>
                                <td>{{$donate_request_list->district_name}}</td>
                                <td style="text-align:center;">
                                    <a class="btn btn-primary"  href="{{route('view_request_details',[@$donate_request_list->id])}}" >View Details</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
         </div>
     </section>
   @endsection