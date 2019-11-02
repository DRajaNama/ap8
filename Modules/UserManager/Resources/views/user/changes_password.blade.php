@extends('layouts.master')
@section('title','Home Page')
@section('content')

<!--innerbnr-->
<div class="inner-bnr" style="background:url('../img/html-images/myaccount-bnr-img.jpg') no-repeat;">
    <div class="container">
        <h1><span>Change</span> Password</h1>
    </div>
</div>
<!--innerbnr-->
<!--breadcrumb-->
<div class="breadcrumb-outer">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{ url('/') }}"><b>Home</b></a></li>
            <li><a href="{{ route('myaccount') }}"><b>My Account</b></a></li>
            <li><span>Change Password</span></li>
        </ul>
    </div>
</div>
<!--breadcrumb-->
<!-- main-content -->
<div class="main-content h-auto">
    <div class="container">
        
        <form class="custom-form userform" action="{{ route('update-password') }}">
            
                @if (!($errors->has('old_password') || $errors->has('password') || $errors->has('password_confirmation')))
                @include('layouts.admin.flash.alert')
                @endif
                @csrf
            <h2 class="circle-line">Change Password</h2>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12">
                        <label class="label">Old Password</label>
                    </div>
                    <div class="col-lg-12">
                        <input type="password" name="old_password" value="{{ old('password') }}" class="form-control lock-icon" placeholder="Old Password">
                        @if ($errors->has('old_password'))
                        <span class="help-block" role="alert">
                            <strong>{{ $errors->first('old_password') }}</strong>
                        </span>
                    @endif
                    </div>
                </div>
            </div>
            <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <label class="label">New Password</label>
                        </div>
                        <div class="col-lg-12">
                            <input type="password" name="password" value="{{ old('password') }}" class="form-control lock-icon" placeholder="New Password">
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
                        <label class="label">Confirm Password</label>
                    </div>
                    <div class="col-lg-12">
                        <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" class="form-control lock-icon" placeholder="Confirm Password">
                        @if ($errors->has('password_confirmation'))
                        <span class="help-block" role="alert">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                    </div>
                </div>
            </div>
            <button class="btn btn-custom yellow-text">Submit</button>
        </form>
    </div>
</div>
@stop