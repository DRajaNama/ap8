@extends('layouts.master')
@section('title','Shipper Registration Page')
@section('content')
@php $classes=[0=>'green',1=>'blue',2=>'orange',3=>'red'] ;
$itr=0;
@endphp
<!-- main-content -->
<div class="main-content">
   <div class="container">
      <form class="custom-form userform" action="{{ route('carrier.plan.choice') }}" method="post">
@include('layouts.admin.flash.alert')
         <h2 class="circle-line">Carrier Registration</h2>
         @csrf
         <div class="form-group formcard-group">
            <div class="row">
               <div class="col-lg-12">
                  <label class="label">SELECT ANY MEMBERSHIP</label>
               </div>
               @foreach($subscriptionPlans as $plan)
               <div class="col-lg-6">
                  <div class="form-card {{  $classes[$itr%4]  }}">
                     <div class="card-title d-flex align-items-center">
                        <span>{{  $plan->duration }} Month</span>
                        <strong class="ml-auto">${{ $plan->amount }}</strong>
                     </div>
                     <div class="detail">
                        <div class="des">
                           {{ $plan->title }}
                        </div>
                      <!--  <ul>
                           <li>
                              Lorem dolor conctetur elit. 
                           </li>
                           <li>
                              Lorem dolor conctetur elit. 
                           </li>
                        </ul>-->
                        <button name="choice" class="btn" type="submit" value="{{ $plan->id }}">Choose This</button>
                     </div>
                  </div>
                  @php $itr++; @endphp
               </div>
               @endforeach
              
            </div>
         </div>
      </form>
   </div>
</div>
<!-- main-content -->
@stop