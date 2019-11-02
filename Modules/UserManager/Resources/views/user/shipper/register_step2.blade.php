@extends('layouts.master')
@section('title','Shipper Registration Page')
@section('content')
@php $transport_type=config::get('constant.trasport_type');  @endphp
<!-- main-content -->
<div class="main-content">
   <div class="container">
            {{ Form::model($user, ['url' => route('shipper.step2.save', $encrypted) , 'method' => 'post','enctype'=>'multipart/form-data','class'=>'custom-form userform','autocomplete'=>'off']) }}
            @include('layouts.admin.flash.alert')
            <h2 class="circle-line">Member Registration</h2>
         <div class="form-group">
            <div class="row">
               <div class="col-lg-12">
                     <p>When transport providers register the availability of a truck (it’s location and trailer type). You can receive an email alert advising you of this.</p>
                  <label class="label">Alert</label> {{ Form::radio('email_notification', 1 , true) }}<span>On</span>
                  {{ Form::radio('email_notification', 0 , false) }}<span>Off</span>
               </div>
               <div class="col-lg-12">
                     <label class="label">Transport Type</label>
                   
               </div>
               <div class="col-lg-12">
                     {{ Form::select('transport_type',$transport_type,0,['class'=>'form-control']) }}
               </div>
            </div>
         </div>
         <div class="form-group">
            <div class="row">
               <div class="col-lg-12">
                  <label class="label">Login Details</label>
               </div>
               <div class="col-lg-12">
                     {{ Form::text('username',old('username'),['class'=>'form-control','placeholder'=>'enter username','autocomplete'=>'off']) }}
                  @if($errors->has('username'))
                  <span class="help-block">{{ $errors->first('username') }}</span>
                  @endif
               </div>
               <div class="col-lg-12">
                     {{ Form::password('password',['class'=>'form-control','placeholder'=>'enter password','autocomplete'=>'off']) }}
                  @if($errors->has('password'))
                  <span class="help-block">{{ $errors->first('password') }}</span>
                  @endif
               </div>
            </div>
         </div>
         <div class="form-group">
            <div class="row">
               <div class="col-lg-12">
                  <div class="d-flex align-items-center rm-f-pass">
                     <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="term" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">I have read & agree to the terms and conditions</label>
                  <br/>      @if($errors->has('term'))
                        <span class="help-block">{{ $errors->first('term') }}</span>
                        @endif
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <button class="btn btn-custom yellow-text">Finish Registration</button>
         {{ Form::close() }}
   </div>
</div>
<!-- main-content -->
@stop