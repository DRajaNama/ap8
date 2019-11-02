@extends('layouts.admin.master')
@section('title','enquiries')
@section('content')
@include('layouts.admin.flash.alert')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Manage Enquiries
            <small>Here you can manage enquiries</small>
        </h1>
        {{ Breadcrumbs::render('common',['append' => [['label'=> $getController,'route'=> \Request::route()->getName()]]]) }}
    </section>

    <section class="content" data-table="enquiries">
            <div class="row enquiries">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-header">
                            <h3 class="box-title"><span class="caption-subject font-green bold uppercase">{{ __('List enquiries') }}</span></h3>
                            
                        </div><!-- /.box-header -->
                        <div class="box-body table-responsive">
                                {{ Form::open(['url' => route('admin.enquirymanager.index'),'method' => 'get']) }}
                                <div class="col-md-12">
                                <div class="row">
                                   
                                    <div class="col-md-5 form-group">
                                        {{ Form::text('keyword', app('request')->query('keyword'), ['class' => 'form-control','placeholder' => 'Keyword e.g: title']) }}
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <button class="btn btn-success" title="Search" type="submit"><i class="fa fa-filter"></i> Filter</button>
                                        <a href="{{ route('admin.enquirymanager.index') }}" class="btn btn-warning" title="Cancel"><i class="fa fa-fw fa-refresh"></i> Reset</a>
                                    </div>
                                </div>
                            </div>
                        {{ Form::close() }}
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr >
                                        <th>#</th>
                                        
                                        <th scope="col"><a href="{{ URL::route('admin.enquirymanager.index',['sort' => 'name','direction'=> request()->direction == 'asc' ? 'desc' : 'asc']) }}">Name</a></th>
                                        <th scope="col"><a href="{{ URL::route('admin.enquirymanager.index',['sort' => 'mobile','direction'=> request()->direction == 'asc' ? 'desc' : 'asc']) }}">Mobile</a></th>
                                        <th scope="col"><a href="{{ URL::route('admin.enquirymanager.index',['sort' => 'email_address','direction'=> request()->direction == 'asc' ? 'desc' : 'asc']) }}">Email</a></th>
                                        <th scope="col"><a href="{{ URL::route('admin.enquirymanager.index',['sort' => 'message','direction'=> request()->direction == 'asc' ? 'desc' : 'asc']) }}">Message</a></th>
                                        <th scope="col" width="18%">created</th>
                                        <th scope="col" class="actions" width="12%">Action</th>
                                    </tr>
                                </thead>
                                        @if($enquiries->count() > 0)
                                        <tbody>
                                    @php
                                    $i = (($enquiries->currentPage() - 1) * ($enquiries->perPage()) + 1)
                                    @endphp
                                    @foreach($enquiries as $Enquiry)
                                        <tr class="row-{{$i}}">
                                            <td> {{$i}}. </td>
                                            
                                            <td>{{$Enquiry->name}}</td>
                                            <td>{{$Enquiry->mobile}}</td>
                                            <td>{{$Enquiry->email_address}}</td>
                                            <td>{{$Enquiry->message}}</td>
                                            <td>{{ $Enquiry->created_at->format(config('get.ADMIN_DATE_TIME_FORMAT')) }}</td>
                                            <td class="actions">
                                                <div class="form-group">
                                                    <a href="{{ route('admin.enquirymanager.show',['id' => $Enquiry->id]) }}" class="btn btn-warning btn-sm btn-flat" data-toggle="tooltip" alt="View setting" title="" data-original-title="View"><i class="fa fa-fw fa-eye"></i></a> 
                                                    </div>
                                            </td>
                                        </tr>
                                    @php
                                        $i++;
                                    @endphp
                                    @endforeach
                                    </tbody>
                                    @else
                                    <tfoot>
                                        <tr>
                                            <td colspan='7' align='center'> <strong>Record Not Available</strong> </td>
                                        </tr>
                                    </tfoot>
                                    @endif
                            </table>
                        </div>
                        <div class="box-footer clearfix">
                            {{ $enquiries->appends(Request::query())->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
@stop
