@extends('layouts.master')
@section('title','Home Page')
@section('content')

<!--innerbnr-->
<div class="inner-bnr" style="background:url('../img/html-images/myaccount-bnr-img.jpg') no-repeat;">
    <div class="container">
        <h1><span>My</span> Accounts</h1>
    </div>
</div>
<!--innerbnr-->
<!--breadcrumb-->
<div class="breadcrumb-outer">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{ url('/') }}"><b>Home</b></a></li>
            <li><span>My Account</span></li>
        </ul>
    </div>
</div>
<!--breadcrumb-->
<!-- main-content -->
<div class="main-content h-auto">
<div class="container">
        @include('layouts.admin.flash.alert')
<div class="my-account-links">
<ul>
<li class="blue">
        @if(\Auth::guard('user')->user()->hasRole('shipper') || !\Auth::guard('user')->user())
        <a class="" href="{{ route('shipper.profile.edit') }}">Update Profile</a>
        @else
        <a class="" href="{{ route('carrier.profile.edit') }}">Update Profile</a>
        @endif
</li>
<li class="purple"><a href="{{ route('profile') }}">View <br/>Profile</a></li>
<li class="yellow"><a href="#">Truck <br/>Register</a></li>

<li class="red">

        @if(\Auth::guard('user')->user()->hasRole('shipper') || !\Auth::guard('user')->user())
        <a class="" href="{{ route('myQuotes') }}">My Quotes</a>
        @else
        <a class="" href="{{ route('myTransportRequest') }}">Transport requests</a>
        @endif

</li>
<li class="black"><a href="{{ route('change-password') }}">Change <br/>Password</a></li>
<li class="blue"><a href="#">Account <br/>Settings</a></li>
<li class="purple"><a href="{{ route('logout') }}">Logout</a></li>
</ul>
</div>
</div>
</div>
<!-- main-content -->
@stop
