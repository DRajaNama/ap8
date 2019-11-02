@extends('layouts.master')
@section('title','Quote Detail')
@section('content')
@include('layouts.admin.flash.alert')
@php
$qparams = app('request')->query();

@endphp


<!--innerbnr-->
<div class="inner-bnr" style="background:url('{{  url("img/html-images/myaccount-bnr-img.jpg") }}') no-repeat;">
    <div class="container">
        <h1><span>Profile</span> Detail</h1>
    </div>
</div>
<!--innerbnr-->
<!--breadcrumb-->
<div class="breadcrumb-outer">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{ url('/') }}"><b>Home</b></a></li>
            <li>
                <a href="{{ route('myaccount') }}"><b>my Account</b></a>
            </li>
            <li><span>view profile</span></li>
        </ul>
    </div>
</div>
<!--breadcrumb-->
<div class="main-content h-auto">
    <div class="container">

        <table class="table table-hover table-striped">
            <tr>
                <th scope="row">Company Name</th>
                <td>{{  !empty($user->company_name)?$user->company_name:'N/A'	}}</td>
            </tr>
            <tr>
                <th scope="row">Contact Name</th>
                <td>{{  !empty($user->contact_name)?$user->contact_name:'N/A'	}}</td>
            </tr>
            <tr>
                <th scope="row">Email</th>
                <td>{{  !empty($user->email)?$user->email:'N/A'	}}</td>
            </tr>
            <tr>
                <th scope="row">Phone</th>
                <td>{{  !empty($user->phone)?$user->phone:'N/A'	}}</td>
            </tr>
            <tr>
                <th scope="row">Mobile</th>
                <td>{{  !empty($user->mobile)?$user->mobile:'N/A'	}}</td>
            </tr>
            <tr>
                <th scope="row">Abn</th>
                <td>{{  !empty($user->abn)?$user->abn:'N/A'	}}</td>
            </tr>
            <tr>
                <th scope="row">Username</th>
                <td>{{  !empty($user->username)?$user->username:'N/A'	}}</td>
            </tr>
            @if(!empty($user->profile))
            <tr>
                <th scope="row">Email Notification</th>
                <td>{{  !empty($user->profile->email_notification)?'Yes':'No'	}}</td>
            </tr>
            <tr>
                <th scope="row">Phone Notification</th>
                <td>{{  !empty($user->profile->phone_notification)?'Yes':'No'	}}</td>
            </tr>
            <tr>
                <th scope="row">Email For Notification</th>
                <td>{{  !empty($user->profile->email_for_notification)?$user->profile->email_for_notification:'N/A'	}}
                </td>
            </tr>
            <tr>
                <th scope="row">Phone For Notification</th>
                <td>{{  !empty($user->profile->phone_for_notification)?$user->profile->phone_for_notification:'N/A'	}}
                </td>
            </tr>

            @endif
            @if(!empty($user->services->count()>0))

            @php

            $services=[];
            foreach($user->services as $service)
            {
            $services[]=$service->service->title;
            }


            @endphp
            <tr>
                <th scope="row">
                    Provided Services
                </th>
                <td> {{ implode(' , ',$services) }}</td>
            </tr>
            @endif

            @if(!empty($user->activePlan) && !empty($user->activePlan->first()) &&  !empty($user->activePlan->first()->plan))
            @php  $planinfo=$user->activePlan->first();   @endphp
            <tr>
                <td colspan="2">
                    <h2>Subcription Plan Detail</h2>
                </td>
            </tr>
            <tr>
                <th scope="row">Plan Name</th>
                <td>{{  !empty($planinfo->plan->title)?$planinfo->plan->title:'N/A'	}}
                </td>
            </tr>
            <tr>
                <th scope="row">Plan Duration</th>
                <td>{{  !empty($planinfo->plan->duration)?$planinfo->plan->duration.' '.$planinfo->plan->plan_interval:'N/A'	}}
                </td>
                </td>
            </tr>
            <tr>
                <th scope="row">Plan End Date</th>
                <td>{{  !empty($planinfo->subscription_ends_at)?$planinfo->subscription_ends_at:'N/A'	}}
                </td>
                </td>
            </tr>

            @endif


            @foreach($user->addresses as $address)
            @if($address->address_type==1)
            <tr>
                <td colspan="2">
                    <h2>Postal Address</h2>
                </td>
            </tr>
            @else
            <tr>
                <td colspan="2">
                    <h2>Street Address</h2>
                </td>
            </tr>
            @endif
            <tr>
                <th scope="row">Address</th>
                <td>{{  !empty($address->address)?$address->address:'N/A'	}}
                </td>
            </tr>
            <tr>
                <th scope="row">Suburb</th>
                <td>{{  !empty($address->suburb)?$address->suburb:'N/A'	}}
                </td>
            </tr>
            <tr>
                <th scope="row">State</th>
                <td>{{  !empty($address->state->name)?$address->state->name:'N/A'	}}
                </td>
            </tr>
            <tr>
                <th scope="row">Pincode</th>
                <td>{{  !empty($address->pincode)?$address->pincode:'N/A'	}}
                </td>
            </tr>
            @endforeach
            @if(!empty($user->user_preferences))
            @php
            $preference=[];
            foreach($user->user_preferences as $user_preference){
            if($user_preference->alert_type==0)
            {
            if($user_preference->filter_type==0)
            {
            $preference['email']['category'][]=$user_preference->category->title;
            }
            if($user_preference->filter_type==1)
            {
            $preference['email']['pickup_state'][]=$user_preference->state->name;
            }
            if($user_preference->filter_type==2)
            {
            $preference['email']['delivery_state'][]=$user_preference->state->name;
            }

            }
            if($user_preference->alert_type==1)
            {
            if($user_preference->filter_type==0)
            {
            $preference['phone']['category'][]=$user_preference->category->title;
            }
            if($user_preference->filter_type==1)
            {
            $preference['phone']['pickup_state'][]=$user_preference->state->name;
            }
            if($user_preference->filter_type==2)
            {
            $preference['phone']['delivery_state'][]=$user_preference->state->name;
            }
            }
            }
            @endphp
            @if(array_key_exists('email',$preference) && !empty($preference['email']))
            @if(array_key_exists('category',$preference['email']) && !empty($preference['email']['category']))
            <tr>
                <th scope="row">Prefered Categories for Email Notification</th>
                <td>{{  implode(' , ',$preference['email']['category'])	}}
                </td>
            </tr>
            @endif
            @if(array_key_exists('pickup_state',$preference['email']) && !empty($preference['email']['pickup_state']))
            <tr>
                <th scope="row">Prefered Pickup States for Email Notification</th>
                <td>{{  implode(' , ',$preference['email']['pickup_state'])	}}
                </td>
            </tr>
            @endif
            @if(array_key_exists('delivery_state',$preference['email']) &&
            !empty($preference['email']['delivery_state']))
            <tr>
                <th scope="row">Prefered Delivery States for Email Notification</th>
                <td>{{  implode(' , ',$preference['email']['delivery_state'])	}}
                </td>
            </tr>
            @endif
            @endif
            @if(array_key_exists('phone',$preference) && !empty($preference['phone']))
            @if(array_key_exists('category',$preference['phone']) && !empty($preference['phone']['category']))
            <tr>
                <th scope="row">Prefered Categories for Phone Notification</th>
                <td>{{  implode(' , ',$preference['phone']['category'])	}}
                </td>
            </tr>
            @endif
            @if(array_key_exists('pickup_state',$preference['phone']) && !empty($preference['phone']['pickup_state']))
            <tr>
                <th scope="row">Prefered Pickup States for Phone Notification</th>
                <td>{{  implode(' , ',$preference['phone']['pickup_state'])	}}
                </td>
            </tr>
            @endif
            @if(array_key_exists('delivery_state',$preference['phone']) &&
            !empty($preference['phone']['delivery_state']))
            <tr>
                <th scope="row">Prefered Delivery States for Phone Notification</th>
                <td>{{  implode(' , ',$preference['phone']['delivery_state'])	}}
                </td>
            </tr>
            @endif
            @endif
            @endif
            </tbody>
        </table>

    </div>
</div>

@stop
