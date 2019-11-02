@extends('layouts.master')
@section('title','Home Page')
@section('content')
<!-- main-content -->
<div class="main-content">
   <div class="container">
         <form method="POST" action="{{ route('password.update') }}" class="custom-form userform">
               @if (session()->has('success'))

               <div class="alert alert-success alert-block">
               
                   <button type="button" class="close" data-dismiss="alert">×</button>
               
                       <strong>{{session()->get('success')}}</strong>
               
               </div>
               
               @endif
               @csrf
               <input type="hidden" name="token" value="{{ $token }}">
         <h2 class="circle-line">Reset Password Form</h2>
         <div class="form-group hide position-relative{{ $errors->has('email') ? ' has-error' : '' }}" style="display:none;">
                <i class="iconimg"><img alt="" src="{{ asset('images/icon4.png') }}"></i>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Enter Email Id" name="email" value="{{ base64_decode($email) ?? old('email') }}" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$">
                @if ($errors->has('email'))
                    <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
              </div>
         <div class="form-group">
            <div class="row">
               <div class="col-lg-12">
                  <label class="label">password</label>
               </div>
               <div class="col-lg-12">
                  <input type="password" name="password" class="form-control user-icon" placeholder="Enter Password">
                  @if ($errors->has('password'))
                  <span class="help-block" role="alert">
                        @foreach($errors->get('password') as $key=>$message)
                      <strong>@php echo $message."<br>"; @endphp</strong>
                      @endforeach
                  </span>
              @endif
               </div>
            </div>
         </div>
         <div class="form-group">
                        <div class="row">
                           <div class="col-lg-12">
                              <label class="label">confirm password</label>
                           </div>
                           <div class="col-lg-12">
                              <input type="password" name="password_confirmation" class="form-control user-icon" placeholder="Confirm Password">
                              @if ($errors->has('password_confirmation'))
                              <span class="help-block" role="alert">
                                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                              </span>
                          @endif
                           </div>
                        </div>
                     </div>
        <button class="btn btn-custom yellow-text" type="submit">Reset Password</button>
        
         <div class="form-bottom">
           
         </div>
      </form>
   </div>
</div>
@endsection
