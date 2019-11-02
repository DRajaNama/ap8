@extends('layouts.admin.master')
@section('title','View enquiry Detail')
@section('content')
@include('layouts.admin.flash.alert')
<section class="content-header">
    <h1>
        Manage enquirys
        <small>Here you can view enquiry detail</small>
    </h1>
    {{ Breadcrumbs::render('common',['append' => [['label'=> $getController,'route'=> 'admin.enquirymanager.index'],['label' => 'View enquiry Detail']]]) }}
</section>

<section class="content" data-table="emailHooks">
    <div class="box">
        <div class="box-header"><h3 class="box-title">{{ $enquiry->name }}</h3>
          
        </div>
        <div class="box-body">
            <table class="table table-hover table-striped">
                <tr>
                    <th scope="row">{{ __('Name') }}</th>
                    <td>{{ $enquiry->name }}</td>
                </tr>


                <tr>
                    <th scope="row">{{ __('Mobile') }}</th>
                    <td>{{ $enquiry->mobile }}</td>
                </tr>
                <tr>
                    <th scope="row">{{ __('Email Address') }}</th>
                    <td>{{ $enquiry->email_address }}</td>
                </tr>
                <tr>
                    <th scope="row">{{ __('Message') }}</th>
                    <td>{{ $enquiry->message }}</td>
                </tr>
               

                <tr>
                    <th scope="row"><?= __('Created') ?></th>
                    <td>{{ $enquiry->created_at->toFormattedDateString() }}</td>
                </tr>
                <tr>
                    <th scope="row">{{ __('Modified') }}</th>
                    <td>{{ $enquiry->updated_at->toFormattedDateString() }}</td>
                </tr>
                
            </table>
            
        </div>
        <div class="box-footer">
                <a href="{{route('admin.enquirymanager.index')}}" class="btn btn-default pull-left" title="Cancel"><i class="fa fa-fw fa-chevron-circle-left"></i> Back</a>
        </div>
    </div>
</section>

@endsection
