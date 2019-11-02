@extends('layouts.master')
@section('title','Home Page')
@section('content')
@include('layouts.admin.flash.alert')
<!-- main-content -->
<div class="main-content">
   <div class="container">
      <form class="custom-form userform">
         <h2 class="circle-line">Member Registration</h2>
         <div class="form-group">
            <div class="row">
               <div class="col-lg-12">
                  <label class="label">Please Select</label>
               </div>
               <div class="col-lg-12">
                  <select class="form-control">
                     <option>SHIPPER - Need Freight Moved</option>
                  </select>
               </div>
               <div class="col-lg-12">
                  <input type="text" class="form-control" placeholder="Enter Company Name">
               </div>
               <div class="col-lg-12">
                  <input type="text" class="form-control" placeholder="Enter Contact Name">
               </div>
            </div>
         </div>
         <div class="form-group">
            <div class="row">
               <div class="col-lg-12">
                  <label class="label">STREET ADDRESS</label>
               </div>
               <div class="col-lg-12">
                  <input type="text" class="form-control" placeholder="Address">
               </div>
               <div class="col-lg-12">
                  <input type="text" class="form-control" placeholder="Enter Contact Name">
               </div>
               <div class="col-lg-5 col-sm-12">
                  <input type="text" class="form-control" placeholder="Suburb">
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>State</option>
                  </select>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <input type="text" class="form-control" placeholder="Postcode">
               </div>
            </div>
         </div>
         <div class="form-group">
            <div class="row">
               <div class="col-lg-12">
                  <label class="label">STREET ADDRESS</label>
               </div>
               <div class="col-lg-12">
                  <input type="text" class="form-control" placeholder="Address">
               </div>
               <div class="col-lg-12">
                  <input type="text" class="form-control" placeholder="Enter Contact Name">
               </div>
               <div class="col-lg-5 col-sm-12">
                  <input type="text" class="form-control" placeholder="Suburb">
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>State</option>
                  </select>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <input type="text" class="form-control" placeholder="Postcode">
               </div>
            </div>
         </div>
         <button class="btn btn-custom yellow-text" formaction="register_step2.html">Next Step</button>
      </form>
   </div>
</div>
<!-- main-content -->
@stop
