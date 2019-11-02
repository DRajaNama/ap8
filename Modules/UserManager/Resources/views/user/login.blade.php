@extends('layouts.master')
@section('title','Home Page')
@section('content')

@php
    $cfo = [];
     if(Request::cookie('authremem')){
         $cfo = json_decode(Request::cookie('authremem'), true);
     }
    @endphp
<!-- main-content -->
<div class="main-content">
   <div class="container">
         <form method="POST" action="{{ route('check.login') }}" class="custom-form userform">

               @csrf
         <h2 class="circle-line">Member Login</h2>
         @if (!($errors->has('email') || $errors->has('password')))
         @include('layouts.admin.flash.alert')
         @endif
         <div class="form-group">
            <div class="row">
               <div class="col-lg-12">
                  <label class="label">Email</label>
               </div>
               <div class="col-lg-12">
                  <input type="text" name="email" class="form-control user-icon" placeholder="Enter Email Address">
                  @if ($errors->has('email'))
                  <span class="help-block" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
               </div>
            </div>
         </div>
         <div class="form-group">
            <div class="row">
               <div class="col-lg-12">
                  <label class="label">Password</label>
               </div>
               <div class="col-lg-12">
                  <input type="password" name="password" class="form-control lock-icon" placeholder="Enter Your Password">
                  @if ($errors->has('password'))
                  <span class="help-block" role="alert">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
               </div>
            </div>
         </div>
         <div class="form-group">
            <div class="row">
               <div class="col-lg-12">
                  <div class="d-flex align-items-center rm-f-pass">
                     <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="remember"  id="customCheck1" {{ old('remember') ? 'checked="checked"' : (!empty($cfo['remember']) ? 'checked="checked"' : '') }} >
                        <label class="custom-control-label" for="customCheck1">Remember my login details</label>
                     </div>
                     <a href="{{ url('password/reset') }}" class="yellow-text ml-auto">Forgot Password?</a>
                  </div>
               </div>
            </div>
         </div>
         <button class="btn btn-custom yellow-text">Login Now</button>
         <div class="form-below-text">New user?  Register as <a href="{{  url('user/shipper-register')  }}">shipper</a> or <a href="{{  url('user/carrier-registration-pricing')  }}">carrier</a></div>
        <!-- <div class="form-bottom">
            <div class="seperator"><span>OR</span></div>
            <div class="social-link">
               <div class="title">Sign in with</div>
               <ul class="social-list">
                  <li>
                     <a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li>
                     <a href="javascript:void(0);"><i class="fab fa-google-plus-g"></i></a>
                  </li>
                  <li>
                     <a href="javascript:void(0);"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                  </li>
               </ul>
            </div>
         </div>-->
      </form>
   </div>
</div>
<!-- main-content -->
@stop
