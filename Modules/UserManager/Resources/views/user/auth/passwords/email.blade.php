@extends('layouts.master')
@section('title','Home Page')
@section('content')
<!-- main-content -->
<div class="main-content">
   <div class="container">
         <form method="POST" action="{{ route('password.email') }}" class="custom-form userform">
            
@include('layouts.admin.flash.alert')
               @csrf
         <h2 class="circle-line">Send Reset Password Link</h2>
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
        <button class="btn btn-custom yellow-text" type="submit">Send Link</button>
         <div class="form-below-text">  <a href="{{  url('user/login')  }}">login</a></div>
         <div class="form-bottom">
           
         </div>
      </form>
   </div>
</div>

@endsection
