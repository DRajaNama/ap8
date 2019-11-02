@extends('layouts.admin.master')

@section('title') FAQ @stop

@section('per_page_style')

@stop
@section('per_page_script')

@stop
@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Manage FAQ
                <small>Update FAQ</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="javascript:void(0)" class="active">FAQ</a></li>
            </ol>
        </section>
        <section class="content" data-table="settings">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info settings">

                        <div class="box-header with-border">
                            <h3 class="box-title">Edit FAQ</h3>
                            <a href="{{route('data.faq')}}" class="btn btn-default pull-right" title="Cancel"><i
                                        class="fa fa-fw fa-chevron-circle-left"></i> Back</a></div>
                        <!-- /.box-header -->

                        <form method="post" enctype="multipart/form-data" accept-charset="utf-8" role="form"
                              action="{{route('data.faq.update',['id' => $settings->id])}}">
                            @csrf
                            @method('PUT')
                            <div style="display:none;">
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="form-group required {{ $errors->has('is_carrierShipper') ? 'has-error' : '' }}">
                                             <div class="input select">
                                                <label for="is_carrierShipper">User Type</label>
                                                
                                                    <select id="is_carrierShipper" name="is_carrierShipper" class="form-control">
                                                    <option value="">Select User Type</option>
                                                    <option value="0" @if($settings->is_carrierShipper == 0)   echo "selected"; @endif>Carrier</option>
                                                    <option value="1" <?php if($settings->is_carrierShipper == 1) { echo "selected"; }?>>Shipper</option>
                                                    
                                                    </select>
                                          
                                           </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="input text required"><label for="heading">Question</label>
                                                <input type="text" name="heading" class="form-control" placeholder="Enter Question" value="@if(isset($settings->heading)){{$settings->heading}}@endif" required="required" maxlength="150" id="heading">
                                            </div>
                                        </div>
                                     
                                         

                                        <div class="form-group field-textarea-type" style="">
                                            <div class="input textarea">
                                                <label for="description">Solutions</label>
                                                <textarea name="description" class="form-control" id="description" placeholder="Description" rows="5">@if(isset($settings->description)){{$settings->description}}@endif</textarea>
                                            </div>
                                        </div>




                                          
                                    </div>
                                </div><!-- /.row -->
                            </div><!-- /.box-body -->
                            <div class="box-footer">
                                <button class="btn btn-primary btn-flat" title="Submit" type="submit"><i
                                            class="fa fa-fw fa-save"></i> Submit
                                </button>
                                <a href="{{route('category.cargo')}}" class="btn btn-warning btn-flat" title="Cancel"><i class="fa fa-fw fa-chevron-circle-left"></i> Back</a>
                            </div>
                        </form>
                    </div>
                </div>

                 

            </div>
        </section>
@stop