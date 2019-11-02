@extends('layouts.master')
@section('title','Update Shipper profile')
@section('content')
@php $transport_type=config::get('constant.trasport_type');  @endphp

<!-- main-content -->
<div class="main-content">
   <div class="container">
      <?php //dump($errors); ?>
         {{ Form::model($user,['route' => 'shipper.profile.save', 'enctype' => 'multipart/form-data','class'=>'custom-form userform']) }}

         @include('layouts.admin.flash.alert')
         <h2 class="circle-line">Update Shipper Profile</h2>
         <div class="form-group">
            <div class="row">
              @php /* @endphp <div class="col-lg-12">
                  <label class="label">Please Select</label>
               </div>
               <div class="col-lg-12">
                  <select class="form-control">
                     <option>SHIPPER - Need Freight Moved</option>
                  </select>
               </div> @php */ @endphp
               <div class="col-lg-12">
                     {{ Form::text('company_name', old('company_name'), ['class' => 'form-control','placeholder' => 'Enter Company Name']) }}
                     @if($errors->has('company_name'))
                     <span class="help-block">{{ $errors->first('company_name') }}</span>
                     @endif
               </div>
               <div class="col-lg-12">
                     {{ Form::text('contact_name', old('contact_name'), ['class' => 'form-control','placeholder' => 'Enter Contact Name']) }}
                     @if($errors->has('contact_name'))
                     <span class="help-block">{{ $errors->first('contact_name') }}</span>
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
                     {{ Form::text('shipper[address]', old("shipper['address']"), ['class' => 'form-control','placeholder' => 'Enter Address']) }}
                     @if($errors->has('street.address'))
                     <span class="help-block">{{ $errors->first('street.address') }}</span>
                     @endif
               </div>

               <div class="col-lg-5 col-sm-12">
                     {{ Form::text('shipper[suburb]', old("shipper['suburb']"), ['class' => 'form-control','placeholder' => 'Enter Suburb']) }}
                     @if($errors->has('street.suburb'))
                     <span class="help-block">{{ $errors->first('street.suburb') }}</span>
                     @endif
               </div>
               <div class="col-lg-5 col-sm-6">
                  {{ Form::select('shipper[state_id]',$states ,old("shipper['state_id']") ,['class' => 'form-control','placeholder' => 'Please select state']) }}
                  @if($errors->has('street.state_id'))
                  <span class="help-block">{{ $errors->first('street.state_id') }}</span>
                  @endif
               </div>
               <div class="col-lg-4 col-sm-6">
                     {{ Form::text('shipper[pincode]', old("shipper['pincode']"), ['class' => 'form-control','placeholder' => 'Enter Post code']) }}
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
                     {{ Form::text('postal[pincode]', old("postal['pincode']"), ['class' => 'form-control','placeholder' => 'Enter Post code']) }}
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
                       {{ Form::email('email', old('email'), ['class' => 'form-control','placeholder' => 'Enter Email Address','readonly'=>true]) }}
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
               </div>
            </div>
           <?php /* ?> <div class="form-group">
               <div class="row">
                  <div class="col-lg-12">
                        <p>When transport providers register the availability of a truck (it’s location and trailer type). You can receive an email alert advising you of this.</p>
                     <label class="label">Alert</label> {{ Form::radio('email_notification', 1 , true) }}<span>On</span>
                     {{ Form::radio('email_notification', 0 , false) }}<span>Off</span>
                  </div>
                  <div class="col-lg-12">
                        <label class="label">Transport Type</label>

                  </div>
                  <div class="col-lg-12">
                        {{ Form::select('transport_type',$transport_type,0,['class'=>'form-control']) }}
                  </div>
               </div>
            </div> <?php */ ?>

            <div class="form-group {{ $errors->has('profle_photo') ? 'has-error' : '' }}" style="">

                    <div id="image_preview">

                    @if(isset($user))
                     @if(empty($user->profle_photo))
                     <img src="{{asset('img/no_image.gif')}}" class="img-thumbnail"  style="max-height:100px;" alt="">
                     @else
                     <img src="{{ asset('uploads/user/'.$user->profle_photo) }}" style="width: 400px;">
                     @endif
                    @endif
                       </div>

                    <br/>


                    <div class="input file">
                        <label for="image_file">Upload Image</label>
                        <input type="file" id="image" name="profle_photo"/>
                        @if($errors->has('profle_photo'))
                        <br/>
                        <span class="help-block">{{ $errors->first('profle_photo') }}</span>
                        @endif
                    </div>
                </div>
         <button class="btn btn-custom yellow-text"  type="submit">Update Profile</button>
         {{ Form::close() }}
   </div>
</div>
<!-- main-content -->
<script type="text/javascript">
    jQuery("#image").change(function(){
       jQuery('#image_preview').html("");
       var total_file=document.getElementById("image").files.length;
       for(var i=0;i<total_file;i++)
       {
        jQuery('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"' style='width: 400px'>");
       }
    });
  </script>
@stop
