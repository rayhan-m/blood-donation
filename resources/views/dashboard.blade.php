
@extends('master')

@section('mainContent')
      <!-- ################# Slider Starts Here#######################--->

    <section class="page-header" data-stellar-background-ratio="1.2" style="background-position: 0% -80px;">

            <div class="container">

                <div class="row">

                    <div class="col-sm-12 text-center">

                        <h3 style="margin-top:-50px; font-size:24px;">
                            Dashboard
                        </h3>

                        <p class="page-breadcrumb">
                            <a style="margin-top:-50px;" href="#">Home</a> / Dashboard
                        </p>


                    </div>

                </div> <!-- end .row  -->

            </div> <!-- end .container  -->

        </section>
    
    
     <!-- ################# Donation Process Start Here #######################--->
     
     <section id="process" class="donation-care"  style="margin: 100px; 0px;">
         <div class="container">
            <div class="row">
                 <div class="col-md-4 col-sm-6 vd">
                    <div class="">
                     <h3 style="margin-left: 80px;">
                      <a style="padding: 40px; font-size:20px;" href="{{route('previous_record')}}" class="btn btn-sm btn-danger">Previous Record</a></h3>
                     </div>
                 </div>
                 <div class="col-md-4 col-sm-6 vd">
                    <div class="">
                        <h3 style="margin-left: 80px;">
                     <a style="padding: 40px; font-size:20px;" href="{{route('donate_blood')}}" class="btn btn-sm btn-danger">Donate Blood</a></h3>
                     </div>
                 </div>
                 <div class="col-md-4 col-sm-6 vd">
                    <div class="">
                        <h3 style="margin-left: 80px;">
                        <a style="padding: 40px; font-size:20px;" href="{{route('find_blood')}}" class="btn btn-sm btn-danger">Find Blood</a></h3>
                     </div>
                 </div>
            </div>
         </div>
     </section>
   @endsection