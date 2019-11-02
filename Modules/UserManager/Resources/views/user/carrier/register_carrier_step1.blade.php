@extends('layouts.master')
@section('title','Shipper Registration Page')
@section('content')
<!-- main-content -->
<div class="main-content">
   <div class="container">
         {{ Form::open(['route' => 'carrier.step1.save', 'enctype' => 'multipart/form-data','class'=>'custom-form userform']) }}
         
@include('layouts.admin.flash.alert')
         <h2 class="circle-line">Carrier Registration</h2>
         <div class="form-group">
            <div class="row">
               <div class="col-lg-12">
                  <label class="label">COMPANY</label>
               </div>
               <div class="col-lg-12">
                     {{ Form::text('company_name', old('company_name'), ['class' => 'form-control','placeholder' => 'Enter Company Name']) }}
                     @if($errors->has('company_name'))
                     <span class="help-block">{{ $errors->first('company_name') }}</span>
                     @endif
               </div>
            </div>
         </div>
         <div class="form-group">
               <div class="row">
                  <div class="col-lg-12">
                     <label class="label">STREET ADDRESS</label>
                  </div>
                  <div class="col-lg-12">
                        {{ Form::text('street[address]', old("street['address']"), ['class' => 'form-control','placeholder' => 'Enter Address']) }}
                        @if($errors->has('street.address'))
                        <span class="help-block">{{ $errors->first('street.address') }}</span>
                        @endif
                  </div>
                  
                  <div class="col-lg-5 col-sm-12">
                        {{ Form::text('street[suburb]', old("street['suburb']"), ['class' => 'form-control','placeholder' => 'Enter Suburb']) }}
                        @if($errors->has('street.suburb'))
                        <span class="help-block">{{ $errors->first('street.suburb') }}</span>
                        @endif
                  </div>
                  <div class="col-lg-5 col-sm-6">
                     {{ Form::select('street[state_id]',$states ,old("street['state_id']") ,['class' => 'form-control','placeholder' => 'Please select state']) }}
                     @if($errors->has('street.state_id'))
                     <span class="help-block">{{ $errors->first('street.state_id') }}</span>
                     @endif
                  </div>
                  <div class="col-lg-4 col-sm-6">
                        {{ Form::text('street[pincode]', old("street['pincode']"), ['class' => 'form-control','placeholder' => 'Post code']) }}
                        @if($errors->has('street.pincode'))
                        <span class="help-block">{{ $errors->first('street.pincode') }}</span>
                        @endif
                  </div>
               </div>
            </div>
            <div class="form-group">
                  <div class="row">
                     <div class="col-lg-12">
                        <label class="label">Postal ADDRESS</label>
                     </div>
                     <div class="col-lg-12">
                           {{ Form::text('postal[address]', old("postal['address']"), ['class' => 'form-control','placeholder' => 'Enter Address']) }}
                           @if($errors->has('postal.address'))
                           <span class="help-block">{{ $errors->first('postal.address') }}</span>
                           @endif
                     </div>
                     
                     <div class="col-lg-5 col-sm-12">
                           {{ Form::text('postal[suburb]', old("postal['suburb']"), ['class' => 'form-control','placeholder' => 'Enter Suburb']) }}
                           @if($errors->has('postal.suburb'))
                           <span class="help-block">{{ $errors->first('postal.suburb') }}</span>
                           @endif
                     </div>
                     <div class="col-lg-5 col-sm-6">
                        {{ Form::select('postal[state_id]',$states ,old("postal['state_id']") ,['class' => 'form-control','placeholder' => 'Please select state']) }}
                        @if($errors->has('postal.state_id'))
                        <span class="help-block">{{ $errors->first('postal.state_id') }}</span>
                        @endif
                     </div>
                     <div class="col-lg-4 col-sm-6">
                           {{ Form::text('postal[pincode]', old("postal['pincode']"), ['class' => 'form-control','placeholder' => 'Post code']) }}
                           @if($errors->has('postal.pincode'))
                           <span class="help-block">{{ $errors->first('postal.pincode') }}</span>
                           @endif
                     </div>
                  </div>
               </div>
               <div class="form-group">
                     <div class="row">
                        <div class="col-lg-12">
                           <label class="label">Contact Detail</label>
                        </div>
                        <div class="col-lg-12">
                             {{ Form::email('email', old('email'), ['class' => 'form-control','placeholder' => 'Enter Email Address']) }}
                           @if($errors->has('email'))
                           <span class="help-block">{{ $errors->first('email') }}</span>
                           @endif
                        </div>
                        
                        <div class="col-lg-5 col-sm-12">
                              {{ Form::text('mobile', old('mobile'), ['class' => 'form-control','placeholder' => 'Enter Mobile Number']) }}
                              @if($errors->has('mobile'))
                              <span class="help-block">{{ $errors->first('mobile') }}</span>
                              @endif
                        </div>
                        <div class="col-lg-5 col-sm-6">
                              {{ Form::text('phone', old('phone'), ['class' => 'form-control','placeholder' => 'Enter Phone Number']) }}
                              @if($errors->has('phone'))
                              <span class="help-block">{{ $errors->first('phone') }}</span>
                              @endif
                        </div>
                        <div class="col-lg-5 col-sm-6">
                              {{ Form::text('abn', old('abn'), ['class' => 'form-control','placeholder' => 'Enter ABN']) }}
                              @if($errors->has('abn'))
                              <span class="help-block">{{ $errors->first('abn') }}</span>
                              @endif
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="row">
                        <div class="col-lg-12">
                           <label class="label">User Details</label>
                        </div>
                        <div class="col-lg-12">
                           {{ Form::text('contact_name',old('contact_name'),['class'=>'form-control','placeholder'=>'Contact name']) }}
                           @if($errors->has('contact_name'))
                           <span class="help-block">{{ $errors->first('contact_name') }}</span>
                           @endif
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="row">
                        <div class="col-lg-12">
                           <label class="label">Additional Details</label>
                        </div>
                        <div class="col-lg-12">
                           {{ Form::text('username',old('username'),['class'=>'form-control','placeholder'=>'User name']) }}
                           @if($errors->has('username'))
                           <span class="help-block">{{ $errors->first('username') }}</span>
                           @endif
                        </div>
                        <div class="col-lg-12">
                           {{ Form::password('password',['class'=>'form-control','placeholder'=>'password']) }}
                           @if($errors->has('password'))
                           <span class="help-block">{{ $errors->first('password') }}</span>
                           @endif
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group checkgroup-form">
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" name="agree" id="d1">
                                 <label class="custom-control-label" for="d1"> I agree that Loadshift is not responsible for the
                                    actions of any Buyer (Shipper) or Seller (Carrier) participating in this marketplace.
                                 </label>
                                 @if($errors->has('agree'))
                                 <span class="help-block">{{ $errors->first('agree') }}</span>
                                 @endif
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" name="acknowledge" id="d2">
                                 <label class="custom-control-label" for="d2"> I acknowledge that this subscription is to be only
                                    used by people from the business name that has been nominated in this registration, and will
                                    not be shared with any separate entity or person. </label>
                                 @if($errors->has('acknowledge'))
                                 <span class="help-block">{{ $errors->first('acknowledge') }}</span>
                                 @endif
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" name="term" id="d3">
                                 <label class="custom-control-label" for="d3"> I accept the full Terms & Conditions</label>
                                 @if($errors->has('term'))
                                 <span class="help-block">{{ $errors->first('term') }}</span>
                                 @endif
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
         <button class="btn btn-custom yellow-text" type="submit">Next Step</button>
      </form>
   </div>
</div>
<!-- main-content -->
@stop