@extends('layouts.master')
@section('title','Shipper Registration Page')
@section('content')
<!-- main-content -->
<div class="main-content">
   <div class="container">
      {{ Form::model($user, ['url' => route('carrier.step4.save', $encrypted) , 'method' => 'post','enctype'=>'multipart/form-data','class'=>'custom-form userform userform ex-large','autocomplete'=>'off']) }}

@include('layouts.admin.flash.alert')
      <h2 class="circle-line">Member Registration</h2>
      <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="label-toggle d-flex align-items-center">
                        <label class="label">Email Alerts</label>
                        <label class="custom-switch ml-auto">
                           <input type="checkbox" name="profile[email_notification]"
                              {{ ($user->profile && $user->profile->email_notification)?'checked':'' }}>
                           <span class="slider round">
                              <span class="on">ON</span>
                              <span class="off">OFF</span>
                           </span>
                        </label>
                        @if($errors->has('profile.email_notification'))
                        <span class="help-block">{{ $errors->first('profile.email_notification') }}</span>
                        @endif
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <p>
                        This feature assists in the filtering of the e-mail alerts by providing six definitions for the
                        cargo type. By ticking or unticking a box, you may select which cargo type alerts are emailed to
                        you. (example: a green tick in the box signifies that the email alerts for that cargo type is
                        turned ON).
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="form-group">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="label-toggle d-flex align-items-center">
                        <label class="label">Mobile SMS Alerts</label>
                        <label class="custom-switch ml-auto">
                           <input type="checkbox" name="profile[phone_notification]"
                              {{ ($user->profile && $user->profile->phone_notification)?'checked':'' }}>
                           <span class="slider round">
                              <span class="on">ON</span>
                              <span class="off">OFF</span>
                           </span>
                        </label>
                        @if($errors->has('profile.phone_notification'))
                        <span class="help-block">{{ $errors->first('profile.phone_notification') }}</span>
                        @endif
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <p>
                        This feature assists in the filtering of the mobile alerts by providing six definitions for the
                        cargo type. By ticking or unticking a box, you may select which cargo type alerts are sent to
                        you by SMS . (example: a green tick in the box signifies that the SMS alerts for that cargo type
                        is turned ON).
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="form-group">
               <div class="row">
                  <div class="col-lg-12">
                     {{ Form::text('profile[email_for_notification]',old('profile[email_for_notification]'),['class'=>'form-control','placeholder'=>'Email']) }}
                     @if($errors->has('profile.email_for_notification'))
                     <span class="help-block">{{ $errors->first('profile.email_for_notification') }}</span>
                     @endif
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="form-group">
               <div class="row">
                  <div class="col-lg-12">
                     {{ Form::text('profile[phone_for_notification]',old('profile[phone_for_notification]'),['class'=>'form-control','placeholder'=>'Phone']) }}
                     @if($errors->has('profile.phone_for_notification'))
                     <span class="help-block">{{ $errors->first('profile.phone_for_notification') }}</span>
                     @endif
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="form-group checkgroup-form">
               <div class="row">
                  <div class="col-lg-12">
                     <label class="label">Type</label>
                  </div>

                  @foreach($cargo_categories as $key=>$category)
                  <div class="col-lg-4 col-sm-4">
                     <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="email_categories[{{ $category->id }}]"
                           id="customCheck{{ $key }}"
                           {{  ( array_key_exists('00',$preferences)  && in_array($category->id,$preferences['00']))?'checked':''  }}>
                        <label class="custom-control-label" for="customCheck{{ $key }}">{{ $category->title }}</label>
                     </div>
                  </div>
                  @endforeach


               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="form-group checkgroup-form">
               <div class="row">
                  <div class="col-lg-12">
                     <label class="label">Type</label>
                  </div>
                  @foreach($cargo_categories as $key=>$category)
                  <div class="col-lg-4 col-sm-4">
                     <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="phone_categories[{{ $category->id }}]"
                           id="customChecks{{ $key }}"
                           {{ ( array_key_exists('10',$preferences)  && in_array($category->id,$preferences['10']))?'checked':''  }}>
                        <label class="custom-control-label" for="customChecks{{ $key }}">{{ $category->title }}</label>
                     </div>
                  </div>
                  @endforeach


               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="form-group checkgroup-form">
               <div class="row">
                  <div class="col-lg-12">
                     <label class="label">Request Filters</label>
                     <label class="sub-label">Pick-Up States: (optional)<br />Select only the states that you would like
                        to recieve alerts for</label>
                  </div>
                  <div class="col-lg-12">
                     <div class="row">
                        @foreach($states as $key=>$state)
                        <div class="col-lg-3">
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input"
                                 name="email_pickup_states[{{ $state->id }}]" id="ccc{{ $key }}"
                                 {{ ( array_key_exists('01',$preferences)  && in_array($state->id,$preferences['01']))?'checked':''  }}>
                              <label class="custom-control-label" for="ccc{{ $key }}">{{  $state->short_name }}</label>
                           </div>
                        </div>
                        @endforeach


                     </div>
                  </div>
               </div>
            </div>
            <div class="form-group checkgroup-form">
               <div class="row">
                  <div class="col-lg-12">
                     <label class="sub-label">Delivery States: (optional)<br />Select only the states that you would
                        like to recieve alerts for</label>
                  </div>
                  <div class="col-lg-12">
                     <div class="row">
                        @foreach($states as $key=>$state)
                        <div class="col-lg-3">
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input"
                                 name="email_delivery_states[{{ $state->id }}]" id="cccs{{ $key }}"
                                 {{ ( array_key_exists('02',$preferences)  && in_array($state->id,$preferences['02']))?'checked':''  }}>
                              <label class="custom-control-label" for="cccs{{ $key }}">{{  $state->short_name }}</label>
                           </div>
                        </div>
                        @endforeach

                     </div>
                  </div>
               </div>
            </div>
           <!-- <div class="row">
               <div class="col-lg-6">
                  @php
                  $dimentions=array();
                  $email_dimention_width=old('email_dimention[width]');
                  $email_dimention_length=old('email_dimention[length]');
                  $email_dimention_weigth=old('email_dimention[weigth]');
                  if(!empty($preferences['03']) && ($preferences['03'][0]!="--"))
                  {
                     $dimentions=explode('-',$preferences['03'][0]);
                     $email_dimention_width=$dimentions[0];
                     $email_dimention_length=$dimentions[1];
                     $email_dimention_weigth=$dimentions[2];
                  }
                  @endphp
                  <div class="form-group">
                     {{ Form::text('email_dimention[width]',$email_dimention_width,['class'=>'form-control','placeholder'=>'Max Width - MM (optional)']) }}
                     <p class="small-p">Leave Blank to receive all Widths</p>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="form-group">
                     {{ Form::text('email_dimention[length]',$email_dimention_length,['class'=>'form-control','placeholder'=>'Max Length - MM (optional)']) }}
                     <p class="small-p">Leave Blank to receive all Lengths</p>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="form-group">
                     {{ Form::text('email_dimention[weigth]',$email_dimention_weigth,['class'=>'form-control','placeholder'=>'Max Weight - KG (optional)']) }}
                     <p class="small-p">Leave Blank to receive all Weights</p>
                  </div>
               </div>
            </div>-->
         </div>
         <div class="col-lg-6">
            <div class="form-group checkgroup-form">
               <div class="row">
                  <div class="col-lg-12">
                     <label class="label">Request Filters</label>
                     <label class="sub-label">Pick-Up States: (optional)<br />Select only the states that you would like
                        to recieve alerts for</label>
                  </div>
                  <div class="col-lg-12">
                     <div class="row">
                        @foreach($states as $key=>$state)
                        <div class="col-lg-3">
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input"
                                 name="phone_pickup_states[{{ $state->id }}]" id="ccca{{ $key }}"
                                 {{ ( array_key_exists('12',$preferences)  && in_array($state->id,$preferences['12']))?'checked':''  }}>
                              <label class="custom-control-label" for="ccca{{ $key }}">{{  $state->short_name }}</label>
                           </div>
                        </div>
                        @endforeach

                     </div>
                  </div>
               </div>
            </div>
            <div class="form-group checkgroup-form">
               <div class="row">
                  <div class="col-lg-12">
                     <label class="sub-label">Delivery States: (optional)<br />Select only the states that you would
                        like to recieve alerts for</label>
                  </div>
                  <div class="col-lg-12">
                     <div class="row">
                        @foreach($states as $key=>$state)
                        <div class="col-lg-3">
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input"
                                 name="phone_delivery_states[{{ $state->id }}]" id="cccb{{ $key }}"
                                 {{ ( array_key_exists('12',$preferences)  && in_array($state->id,$preferences['12']))?'checked':''  }}>
                              <label class="custom-control-label" for="cccb{{ $key }}">{{  $state->short_name }}</label>
                           </div>
                        </div>
                        @endforeach

                     </div>
                  </div>
               </div>
            </div>
           <!-- <div class="row">
                  @php

                  $dimentions=array();
                  $phone_dimention_width=old('phone_dimention[width]');
                  $phone_dimention_length=old('phone_dimention[length]');
                  $phone_dimention_weigth=old('phone_dimention[weigth]');
                  if(!empty($preferences['13']) && ($preferences['13'][0]!="--"))
                  {
                     $dimentions=explode('-',$preferences['13'][0]);
                     $phone_dimention_width=$dimentions[0];
                     $phone_dimention_length=$dimentions[1];
                     $phone_dimention_weigth=$dimentions[2];
                  }
                  @endphp
               <div class="col-lg-6">
                  <div class="form-group">
                     {{ Form::text('phone_dimention[width]',$phone_dimention_width,['class'=>'form-control','placeholder'=>'Max Width - MM (optional)']) }}
                     <p class="small-p">Leave Blank to receive all Widths</p>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="form-group">
                     {{ Form::text('phone_dimention[length]',$phone_dimention_length,['class'=>'form-control','placeholder'=>'Max Length - MM (optional)']) }}
                     <p class="small-p">Leave Blank to receive all Lengths</p>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="form-group">
                     {{ Form::text('phone_dimention[weigth]',$phone_dimention_weigth,['class'=>'form-control','placeholder'=>'Max Weight - KG (optional)']) }}
                     <p class="small-p">Leave Blank to receive all Weights</p>
                  </div>
               </div>
            </div>-->
         </div>

         <div class="col-lg-3">
            <button class="btn btn-custom yellow-text" type="submit">Next Step</button>
         </div>
      </div>
      {{ Form::close() }}
   </div>
</div>
<!-- main-content -->
@stop
