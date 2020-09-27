
@extends('master')

@section('mainContent')
<style>
    .page-header{
        background-image: url("../frontend/assets/images/find_donar_banner.jpg");
    }
</style>
<!-- ################# Slider Starts Here#######################--->

    <section class="page-header" data-stellar-background-ratio="1.2" style="background-position: 0% -80px;">

            <div class="container">

                <div class="row">

                    <div class="col-sm-12 text-center">
                        <h3 style="margin-top:-50px; font-size:24px;">
                            Request For Blood
                        </h3>
                    </div>

                </div> <!-- end .row  -->

            </div> <!-- end .container  -->

        </section>
    
    
     <!-- ################# Donation Process Start Here #######################--->
     
     <section>
        <div class="col-md-10" style="margin-left: 120px; margin-bottom:130px;">
            <div class="auth-logo text-center mb-4"><img src="{{asset('/')}}{{@$setting->logo}}" alt=""></div>
            <div class="card">
                <div class="card-header text-center">{{ __('Blood Request Form') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('blood_request_submit') }}">
                        @csrf
                        <input type="hidden" name="url" id="url" value="{{URL::to('/')}}">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Blood Group') }}</label>

                            <div class="col-md-6">
                                <select class="niceSelect w-100 bb form-control{{ $errors->has('blood_group_id') ? ' is-invalid' : '' }}"
                                    name="blood_group_id" id="blood_group_id">
                                    <option data-display="Select Bread *" value="">Select Blood Group</option>
                                    <option value="1">AB-</option>
                                    <option value="2">AB+</option>
                                    <option value="3">A-</option>
                                    <option value="4">A+</option>
                                    <option value="5">B-</option>
                                    <option value="6">B+</option>
                                    <option value="7">O-</option>
                                    <option value="8">O+</option>
                                </select>
                                <span class="focus-border"></span> 
                                @if ($errors->has('blood_group_id'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('blood_group_id') }}</strong>
                                    </span> 
                                @endif
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Division') }}</label>
                            @php
                                $divisions=App\Division::get();
                            @endphp
                            <div class="col-md-6">
                                <select  name="division_id" class="form-control form-control-lg {{ $errors->has('division_id') ? ' is-invalid' : '' }}" id="select_division">
                                    <option value="">Select Division</option>
                                    @foreach ($divisions as $division)
                                        <option value="{{ $division->id }}">{{ $division->name }}</option>
                                    @endforeach
                                </select>
                                <span class="focus-border"></span> 
                                @if ($errors->has('division_id'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('division_id') }}</strong>
                                    </span> 
                                @endif
                            </div>
                        </div>

                         <div class="form-group row" id="select_distric_div">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('District') }}</label>

                            <div class="col-md-6">
                                <select class="form-control form-control-lg select_distric_for_upazila {{ $errors->has('district_id') ? ' is-invalid' : '' }}" name="district_id" id="select_distric">
                                </select>

                                <span class="focus-border"></span> 
                                @if ($errors->has('district_id'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('district_id') }}</strong>
                                    </span> 
                                @endif
                            </div>
                        </div>

                         <div class="form-group row" id="select_upazila_div">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Upazila') }}</label>

                            <div class="col-md-6">
                                <select class="form-control form-control-lg select_upazila_union {{ $errors->has('upozila_id') ? ' is-invalid' : '' }}" name="upozila_id" id="select_upazila">
                                </select>

                                <span class="focus-border"></span> 
                                @if ($errors->has('upozila_id'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('upozila_id') }}</strong>
                                    </span> 
                                @endif
                            </div>
                        </div>

                         <div class="form-group row" id="select_union_div">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Union') }}</label>

                            <div class="col-md-6">
                                <select class="form-control form-control-lg {{ $errors->has('union_id') ? ' is-invalid' : '' }}" name="union_id" id="select_union">
                                </select>
                                <span class="focus-border"></span> 
                                @if ($errors->has('union_id'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('union_id') }}</strong>
                                    </span> 
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>

                            <div class="col-md-6">
                                <textarea name="location" class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" id="location" cols="70" rows="5"></textarea>

                                <span class="focus-border"></span> 
                                @if ($errors->has('location'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('location') }}</strong>
                                    </span> 
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('PatientMedical History') }}</label>

                            <div class="col-md-6">
                                <textarea name="patient_medical_history" class="form-control{{ $errors->has('patient_medical_history') ? ' is-invalid' : '' }}" id="patient_medical_history" cols="70" rows="5"></textarea>

                                <span class="focus-border"></span> 
                                @if ($errors->has('patient_medical_history'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('patient_medical_history') }}</strong>
                                    </span> 
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit Request') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
     </section>
   @endsection