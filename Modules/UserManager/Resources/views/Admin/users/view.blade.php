@extends('layouts.admin.master')

@section('title') Shippers @stop
@section('content')
@include('layouts.admin.flash.alert')
@php
$qparams = app('request')->query();

@endphp
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Manage Shippers
        <small>Here you can manage the Shippers</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('admin/dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{route('admin.shippers')}}" class="active">Shippers</a></li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title"><span class="caption-subject font-green bold uppercase">List
                            Shippers</span></h3>
                    <div class="box-tools">
                        {{-- <a href="{{route('admin.shippers.add')}}" class="btn btn-success btn-flat btn-sm"><i
                            class="fa fa-plus"></i> New Carrier</a> --}}
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                    {{ Form::open(['url' => route('admin.shippers', $qparams),'method' => 'get']) }}
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-2 form-group">
                                {{ Form::select('status', ['' => 'All',1 => 'Active', 0 => 'Inactive'], app('request')->query('status'), ['class' => 'form-control']) }}
                            </div>
                            <div class="col-md-5 form-group">
                                {{ Form::text('keyword', app('request')->query('keyword'), ['class' => 'form-control','placeholder' => 'Keyword e.g: author, feedback']) }}
                            </div>
                            <div class="col-md-3 form-group">
                                <button class="btn btn-success" title="Search" type="submit"><i
                                        class="fa fa-filter"></i> Filter</button>
                                <a href="{{ route('admin.shippers') }}" class="btn btn-warning" title="Cancel"><i
                                        class="fa fa-fw fa-refresh"></i> Reset</a>
                            </div>
                        </div>
                    </div>
                    {{ Form::close() }}
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th scope="col">Company Name</th>
                                <th scope="col">Contact Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Status</th>
                                <th scope="col">Verification Status</th>
                                <th scope="col" class="actions" style="width: 15%;">Actions</th>
                            </tr>
                        </thead>
                        @if($users->count() > 0)
                        <tbody>
                            @php
                            $i = (($users->currentPage() - 1) * ($users->perPage()) + 1)
                            @endphp
                            @foreach($users as $user)
                            <tr class="row-{{ $user->id }}">
                                <td> {{$i}}. </td>
                                <td>{{$user->company_name}}</td>
                                <td>{{$user->contact_name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->mobile}}</td>
                                <td>{{$user->phone}}</td>
                                <td>
                                    @if ($user->status == 1)
                                    <span class='btn btn-success updateStatus' data-value="1" data-column="status"
                                        data-url="{{ route('admin.carrier.changeStatus',$user->id) }}">Active</span>
                                    @else
                                    <span class='btn btn-danger updateStatus' data-value="0" data-column="status"
                                        data-url="{{ route('admin.carrier.changeStatus',$user->id) }}">In-Active</span>
                                    @endif
                                </td>
                                <td> @if($user->is_verified===1)

                                    <span class="btn btn-success ">Verified</span>

                                    @else

                                    <span class="btn btn-danger ">Pending</span>
                                    @endif
                                </td>
                                <td class="actions">

                                    <a href="{{ route('admin.shipper.view',$user->id)}}" class="btn btn-warning btn-sm"
                                        data-toggle="tooltip" alt="View Shippers" title="" data-original-title="View"><i
                                            class="fa fa-fw fa-eye"></i></a>&nbsp;&nbsp;





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
                    {{$users->appends(Request::query())->links()}}
                </div>
            </div>
        </div>

    </div>
</section>
@stop

@section('per_page_script')
<script>
$(document).on('click', '.updateStatus', function(event) {
    event.preventDefault();
    var _this = $(this);
    var title = _this.data('title');
    var value = _this.attr('data-value') == 1 ? 0 : 1 ;
    var column = _this.data('column');
    console.log(column);
    var message = "Are you sure want to active this user?";
    if(column == "status"){
        if(_this.attr('data-value') == 1){
            message = 'Are you sure want to in-active this user?';
        }else{
            message = 'Are you sure want to active this user?';
        }
    }
    $.confirm({
        title: 'Alert',
        content: message,
        icon: 'fa fa-exclamation-circle',
        animation: 'scale',
        closeAnimation: 'scale',
        opacity: 0.5,
        theme: 'supervan',
        buttons: {
            'confirm': {
                text: 'Yes',
                btnClass: 'btn-blue',
                action: function() {
                    $.ajax({
                        url: _this.data('url'),
                        data: {status: value},
                        type: 'POST',
                        dataType: "json",
                        headers: {
                            "accept": "application/json",
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                        success: function (data) {
                                if(data.success==true){
                                    if(value == 0){
                                        _this.removeClass("btn-success");
                                        _this.addClass("label-danger");
                                        _this.html("In-Active");
                                        _this.attr("data-value",0);
                                    }else{
                                        _this.removeClass("label-danger");
                                      //  _this.removeClass("updateStatus");
                                        _this.addClass("btn-success");
                                        _this.html("Active");
                                        _this.attr("data-value",1);
                                    }


                                $.alert({
                                    columnClass: 'medium',
                                    title: 'Success',
                                    icon: 'fa fa-check',
                                    type: 'green',
                                    content:  data.message,
                                    });
                                }else{
                                        $.alert({
                                            columnClass: 'col-md-8',
                                            title: 'Error',
                                            icon:  'fa fa-warning',
                                            type:  'red',
                                            content: data.message,
                                        });
                                }
                                },
                                error: function (xhr, ajaxOptions, thrownError) {
                                    var errors = JSON.parse(xhr.responseText);
                                    console.log(errors);
                                    var errs = '';
                                    $.each( errors.errors, function( key, value ) {
                                        console.log( key + ": " + value );
                                        errs += value;
                                        errs += "<br>";
                                    });
                                $.alert({
                                // columnClass: 'medium',
                                    title: errors.message,
                                    icon:  'fa fa-warning',
                                    type:  'red',
                                        content:  errs,
                                    });
                                }
                    });
                }
            },
            cancelAction: {
                text: 'Cancel'
            }
        }
    });
});
</script>
@stop
