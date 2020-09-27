@extends('admin.master')
@section('mainContent')


<div class="breadcrumb">
    <ul>
        <li><a href="#">Dashboard</a></li>
        <li>Blood Donar List</li>
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
                                <th style="width:10%">SL</th>
                                <th style="width:15%">Name</th>
                                <th style="width:10%">Blood Group</th>
                                <th style="width:15%">Email</th>
                                <th style="width:10%">Phone</th>
                                <th style="width:10%">Image</th>
                                <th style="width:10%">Active Status</th>
                                <th style="width:20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $count=1;
                            @endphp
                            @foreach ($donars as $donar)
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td>{{$donar->name}}</td>
                                <td>{{$donar->blood_group_id}}</td>
                                <td>{{$donar->email}}</td>
                                <td>{{$donar->phone}}</td>
                                <td style="text-align:center;"> <img height="80px;" width="80px;"  src="{{ file_exists(@$donar->image) ? asset(@$item->image) : asset('backend/uploads/donar/donar.png') }}" class="img img-fluid">  </td>
                                <td>
                                    @if (@$donar->active_status==1)
                                        <label style="font-size: 14px;" class="badge badge-success" >Active</label>
                                    @else
                                        <label style="font-size: 14px;" class="badge badge-danger">Deactive</label>
                                    @endif
                                </td>
                                <td style="text-align:center;">
                                        <a class="btn btn-outline-primary" data-toggle="modal" data-target="#viewModal{{@$donar->id}}"  href="#" >View</a>
                                    @if (@$donar->active_status==1)
                                        <a data-toggle="modal" data-target="#deleteCategoryModal{{{$donar->id}}}"  href="#"><button class="btn btn-outline-primary" >Deactive</button></a>
                                    @else
                                        <a data-toggle="modal" data-target="#deleteCategoryModal{{{$donar->id}}}"  href="#"><button class="btn btn-outline-primary" >Active</button></a>
                                    @endif
                                </td>
                            </tr>
                                <!--  View Modal -->
                                <div id="viewModal{{@$donar->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle">Blood Donar Details</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            </div>
                                            <div class="modal-body col-md-12">
                                                <div class="col-md-5" style="float: left;">
                                                    <img style="height:200px; width:200px;"   src="{{ file_exists(@$donar->image) ? asset(@$donar->image) : asset('backend/uploads/donar/donar.png') }}" class="img img-fluid">  
                                                </div>
                                                <div class="col-md-7" style="float: left; margin-bottom: 60px;">
                                                    <h4> <b> Blood Group:</b> 

                                                        @if (@$donar->blood_group_id == 1) AB -
                                                        @elseif(@$donar->blood_group_id == 2) AB+
                                                        @elseif(@$donar->blood_group_id == 3) A-
                                                        @elseif(@$donar->blood_group_id == 4) A+
                                                        @elseif(@$donar->blood_group_id == 5) B-
                                                        @elseif(@$donar->blood_group_id == 6) B+
                                                        @elseif(@$donar->blood_group_id == 7) O-
                                                        @elseif(@$donar->blood_group_id == 8) O+
                                                        @endif
                                                    
                                                    </h4>
                                                    <h4> <b> Donar Name:</b> {{@$donar->name}}</h4>
                                                    <h4> <b> Phone:</b> {{@$donar->phone}}</h4>
                                                    <h4> <b> Email:</b> {{@$donar->email}}</h4>
                                                    <h4> <b>Division:</b> {{@$donar->division_name}}</h4>
                                                    <h4> <b>District:</b> {{@$donar->district_name}}</h4>
                                                    <h4> <b>Upozila:</b> {{@$donar->upozila_name}}</h4>
                                                    <h4> <b>Union:</b> {{@$donar->union_name}}</h4>
                                                    <h4> <b>Medical History:</b> {{@$donar->medical_history}}</h4>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!--  End View Modal -->
                             {{-- Delete Modal--}}
                                <div id="deleteCategoryModal{{{$donar->id}}}" class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel-2" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">@if (@$donar->active_status==1) Deactive @else Active @endif Donar</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="text-center">
                                                    <h4>Are You Sure To @if (@$donar->active_status==1) Deactive @else Active @endif Donar ?</h4>
                                                </div>

                                                <div class="mt-20 d-flex justify-content-between">
                                                    <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                                                    @if (@$donar->active_status==1)
                                                        <form action="{{route('blood-donar-deactive',[@$donar->id])}}" method="GET"
                                                        enctype="multipart/form-data">
                                                        <button class="btn btn-danger" type="submit">Deactive</button>
                                                    </form>
                                                    @else
                                                        <form action="{{route('blood-donar-active',[@$donar->id])}}" method="GET"
                                                        enctype="multipart/form-data">
                                                        <button class="btn btn-danger" type="submit">Active</button>
                                                    </form>
                                                    @endif

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                {{--End Delete Modal--}}
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
   

    @endsection