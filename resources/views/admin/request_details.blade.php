@extends('admin.master')
@section('mainContent')


<div class="breadcrumb">
    <ul>
        <li><a href="#">Dashboard</a></li>
        <li>Request Details</li>
    </ul>
</div>
<div class=" border-top"></div>

<!-- Table row-->
<div class="row mb-4">
    <div class="col-md-12 mb-4">
        <div class="card text-left">
            <div class="card-body">
                <div class="col-md-4" style="float: left;">
                   <img height="160px;" width="280px;"  src="{{asset('backend/uploads/donar/patient.jpg') }}" class="img img-fluid">
                </div>
                <div class="col-md-4" style="float: left;">
                   <h3> <b>Blood Group:</b> {{$request_details->blood_group_id}}</h3>
                   <h3> <b>Division:</b> {{$request_details->division_name}}</h3>
                   <h3> <b>District:</b> {{$request_details->district_name}}</h3>
                   <h3> <b>Address:</b> {{$request_details->location}}</h3>
                </div>
                <div class="col-md-4" style="float: left;">
                   <h3> <b>Upazila:</b> {{$request_details->upozila_name}}</h3>
                   <h3> <b>Union:</b> {{$request_details->union_name}}</h3>
                   <h3> <b>Medical History:</b> {{$request_details->patient_medical_history}}</h3>
                </div>
            </div>
        </div>
        <div class="text-center" style="margin-top: 30px;">
            <h2>Donors List</h2>
            
            
            <table class="display table table-striped table-bordered" style="width:100%; font-size:12px;">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Blood Group</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $count=1;
                @endphp
                @foreach ($donors as $donor)
                <tr>
                    <td>{{ $count++ }}</td>
                    <td>{{$donor->name}}</td>
                    <td>
                        @if (@$donor->blood_group_id == 1) AB -
                        @elseif(@$donor->blood_group_id == 2) AB+
                        @elseif(@$donor->blood_group_id == 3) A-
                        @elseif(@$donor->blood_group_id == 4) A+
                        @elseif(@$donor->blood_group_id == 5) B-
                        @elseif(@$donor->blood_group_id == 6) B+
                        @elseif(@$donor->blood_group_id == 7) O-
                        @elseif(@$donor->blood_group_id == 8) O+
                        @endif    
                    </td>
                    <td style="text-align:center;"> <img height="80px;" width="80px;"  src="{{ file_exists(@$donor->image) ? asset(@$donor->image) : asset('backend/uploads/donar/donar.png') }}" class="img img-fluid">  </td>
                    <td style="text-align:center;">
                        <a class="btn btn-secondary" data-toggle="modal" data-target="#viewModal{{@$donor->id}}"  href="#" >View</a>
                        <a class="btn btn-primary" href="#">Receved Blood</a>
                    </td>
                </tr>

                <!--  View Modal -->
                    <div id="viewModal{{@$donor->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Blood donor Details</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body col-md-12">
                                    <div class="col-md-5" style="float: left;">
                                        <img style="height:200px; width:200px;"   src="{{ file_exists(@$donor->image) ? asset(@$donor->image) : asset('backend/uploads/donar/donar.png') }}" class="img img-fluid">  
                                    </div>
                                    <div class="col-md-7" style="float: left; margin-bottom: 60px;">
                                        <h3> <b> Blood Group:</b> 

                                            @if (@$donor->blood_group_id == 1) AB -
                                            @elseif(@$donor->blood_group_id == 2) AB+
                                            @elseif(@$donor->blood_group_id == 3) A-
                                            @elseif(@$donor->blood_group_id == 4) A+
                                            @elseif(@$donor->blood_group_id == 5) B-
                                            @elseif(@$donor->blood_group_id == 6) B+
                                            @elseif(@$donor->blood_group_id == 7) O-
                                            @elseif(@$donor->blood_group_id == 8) O+
                                            @endif
                                        
                                        </h3>
                                        <h3> <b>Donor Name:</b> {{@$donor->name}}</h3>
                                        <h3> <b>Phone: <span style="font-size:40px;" >{{@$donor->phone}}</span></b></h3>
                                        <h3> <b>Email:</b> {{@$donor->email}}</h3>
                                        <h3> <b>Division:</b> {{@$donor->division_name}}</h3>
                                        <h3> <b>District:</b> {{@$donor->district_name}}</h3>
                                        <h3> <b>Upozila:</b> {{@$donor->upozila_name}}</h3>
                                        <h3> <b>Union:</b> {{@$donor->union_name}}</h3>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!--  End View Modal -->
                @endforeach
            </tbody>
        </table>
            
        </div>
    </div>
    @endsection