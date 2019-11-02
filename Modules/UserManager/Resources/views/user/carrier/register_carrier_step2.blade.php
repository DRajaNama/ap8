@extends('layouts.master')
@section('title','Shipper Registration Page')
@section('content')
<!-- main-content -->
<div class="main-content">
   <div class="container">
         {{ Form::model($user, ['url' => route('carrier.step2.save', $encrypted) , 'method' => 'post','enctype'=>'multipart/form-data','class'=>'custom-form userform','autocomplete'=>'off']) }}
         
@include('layouts.admin.flash.alert')
         <h2 class="circle-line">Member Registration</h2>
         <div class="form-group checkgroup-form">
            <div class="row">
               <div class="col-lg-12">
                  <label class="label">Company Details</label>
                  <label class="sub-label"><strong>Services Provided</strong> (tick any applicable boxes)</label>
               </div>
               @php $existing_services= $user->services()->pluck('service_id','service_id')->toArray(); @endphp
               @foreach($services as $key=>$service)
               <div class="col-lg-4 col-sm-4">
                     <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input"  name="service[{{ $service->id }}]"  id="customCheck{{ $key }}" {{ array_key_exists($service->id,$existing_services)?'checked':'' }} >
                        <label class="custom-control-label" for="customCheck{{ $key }}">{{ $service->title }}</label>
                     </div>
                  </div>
               @endforeach
               
            </div>
         </div>
         <div class="form-group  checkgroup-form-small">
            <div class="row">
               <div class="col-lg-12">
                  <label class="sub-label"><strong>Tick applicable box</strong>  (One Only)</label>
               </div>
               <div class="col-lg-12">
                     @php $transport_type=config::get('constant.trasport_type');  @endphp
                     {{ Form::select('trasport_type', ['' => 'Select transport type'] + $transport_type, ($user->profile && $user->profile->trasport_type)?$user->profile->trasport_type:null ,['class'=>'form-control','empty'=>'select transport type']) }}
                  </div>
               {{-- <div class="col-lg-12">
                  <div class="custom-control custom-checkbox">
                     <input type="checkbox" class="custom-control-input" id="customCheck18">
                     <label class="custom-control-label" for="customCheck18">Owner/driver (up to 2 trucks)</label>
                  </div>
               </div>
               <div class="col-lg-12">
                  <div class="custom-control custom-checkbox">
                     <input type="checkbox" class="custom-control-input" id="customCheck19">
                     <label class="custom-control-label" for="customCheck19">Fleet owner (3 trucks or more)</label>
                  </div>
               </div>
               <div class="col-lg-12">
                  <div class="custom-control custom-checkbox">
                     <input type="checkbox" class="custom-control-input" id="customCheck20">
                     <label class="custom-control-label" for="customCheck20">Freight Forwarder (transport Logistics)</label>
                  </div>
               </div> --}}
            </div>
         </div>
         <button class="btn btn-custom yellow-text" type="submit">Next Step</button>
         {{ Form::close() }}
   </div>
</div>
<!-- main-content -->
@stop