
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
     
     <section id="process" class="donation-care"  style="margin: 100px; 0px;">
         <div class="container">
            <div class="row">
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
                    <div class="text-center">
                        @if (@$request_details->is_agree != 1)
                            <a class="btn btn-primary" style="font-size: 20px; padding: 14px 30px; margin: 65px 2px;" href="{{route('want_to_donate',[@$request_details->id])}}">I Want to Donate Blood</a>
                        @else
                            <h2 style="margin-top: 20px;">Thanks For Willing to Donate Blood.</h2>
                            <h4>( Patient will contact with you SOON ! )</h4>
                        @endif
                        
                    </div>
                </div>
            </div>
         </div>
     </section>
   @endsection