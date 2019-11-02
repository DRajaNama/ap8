@extends('layouts.master')
@section('title','Shipper Registration Page')
@section('content')
<!-- main-content -->
<div class="main-content">
   <div class="container">
      <form class="custom-form userform large">
         
@include('layouts.admin.flash.alert')
         <h2 class="circle-line">Member Registration</h2>
         <div class="form-group">
            <div class="row">
               <div class="col-lg-12">
                  <label class="label">What Type & How Many Truck & Trailer<br />Configurations Do You Offer ?</label>
                  <label class="sub-label"><strong>TRUCKS</strong></label>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>Prime Mover</option>
                  </select>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>Rigid Flattop</option>
                  </select>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>Crane Truck</option>
                  </select>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>Rigid Pantech</option>
                  </select>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>Tilt Tray</option>
                  </select>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>Retrevier Towtruck</option>
                  </select>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>Rigid Beavertail</option>
                  </select>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>Rigid With Tailgator</option>
                  </select>
               </div>
            </div>
         </div>
         <div class="form-group">
            <div class="row">
               <div class="col-lg-12">
                  <label class="sub-label"><strong>TRAILERS</strong></label>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>Flat Top</option>
                  </select>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>Dog Trailer</option>
                  </select>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>Drop Deck</option>
                  </select>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>Extendable</option>
                  </select>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>Car Carrier</option>
                  </select>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>Grain Trailer</option>
                  </select>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>Curtainsider</option>
                  </select>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>Horse Trailer/Float</option>
                  </select>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>Dolly</option>
                  </select>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>Livestock</option>
                  </select>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>Low Loader</option>
                  </select>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>Logging</option>
                  </select>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>Refridgerated</option>
                  </select>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>Pig Trailers</option>
                  </select>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>Side Loader</option>
                  </select>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>Pole Jinker</option>
                  </select>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>Skel</option>
                  </select>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>Side Tipper</option>
                  </select>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>Tilt Deck</option>
                  </select>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>Tanker</option>
                  </select>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>Platform</option>
                  </select>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>Tipper</option>
                  </select>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>Walking Floor</option>
                  </select>
               </div>
            </div>
         </div>
         <div class="form-group">
            <div class="row">
               <div class="col-lg-12">
                  <label class="sub-label"><strong>CONFIGURATIONS</strong></label>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>B-Double</option>
                  </select>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>Road Trains</option>
                  </select>
               </div>
            </div>
         </div>
         <div class="form-group">
            <div class="row">
               <div class="col-lg-12">
                  <label class="sub-label"><strong>OTHER</strong></label>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>Pilot</option>
                  </select>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>Hotshot</option>
                  </select>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>Depot Facilities</option>
                  </select>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>UTE</option>
                  </select>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>Trade Plates</option>
                  </select>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>Bobtail Operator</option>
                  </select>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <select class="form-control">
                     <option>Driver Hire</option>
                  </select>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-4">
               <button class="btn btn-custom yellow-text" formaction="register_carrier_step5.html">Next Step</button>
            </div>
            <div class="col-sm-8 text-right">
               <label class="sub-label m0"><strong>"Type & Quantity Of Truck/Trailer/Service<br />Configurations THAT YOU OFFER"</strong></label>
            </div>
         </div>
      </form>
   </div>
</div>
<!-- main-content -->
@stop