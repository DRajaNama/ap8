@extends('layouts.admin.master')
@section('title','CMS Pages')
@section('content')
@include('layouts.admin.flash.alert')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Manage CMS Pages
            <small>Here you can manage cms pages</small>
        </h1>
        {{ Breadcrumbs::render('common',['append' => [['label'=> $getController,'route'=> \Request::route()->getName()]]]) }}
    </section>
@php
$qparams = app('request')->query();

@endphp
    <section class="content" data-table="pages">
            <div class="row pages">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-header">
                            <h3 class="box-title"><span class="caption-subject font-green bold uppercase">{{ __('List Pages') }}</span></h3>
                            <div class="box-tools">
                                <!--a href="{{route('admin.pages.create')}}" class="btn btn-success btn-flat"><i class="fa fa-plus"></i> Add New Page</a-->
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-body table-responsive">
                            <div class="tab-content" style="margin-top:10px;">
                                {{ Form::open(['url' => route('admin.pages.index', $qparams),'method' => 'get']) }}
                        <div class="col-md-12">
                            <div class="row">
                                
                                <div class="col-md-5 form-group">
                                    {{ Form::text('keyword', app('request')->query('keyword'), ['class' => 'form-control','placeholder' => 'Keyword e.g: question, answer']) }}
                                </div>
                                <div class="col-md-3 form-group">
                                    <button class="btn btn-success" title="Search" type="submit"><i class="fa fa-filter"></i> Filter</button>
                                    <a href="{{ route('admin.pages.index') }}" class="btn btn-warning" title="Cancel"><i class="fa fa-fw fa-refresh"></i> Reset</a>
                                </div>
                            </div>
                        </div>
                        {{ Form::close() }}
                        <div class="tab-pane active">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Slug</th>
                                        <th scope="col">Short Description</th>
                                        <th scope="col" >created</th>
                                        <th scope="col" class="actions">Action</th>
                                    </tr>
                                </thead>
                                        @if($pages->count() > 0)
                                        <tbody>
                                    @php
                                    $i = (($pages->currentPage() - 1) * ($pages->perPage()) + 1)
                                    @endphp
                                    @foreach($pages as $page)
                                        <tr class="row-{{ $page->id }}">
                                            <td> {{$i}}. </td>
                                            <td>{{$page->title}}</td>
                                            <td>{{$page->slug}}</td>
                                            <td>{{$page->short_description}}</td>
                                            <td>{{ $page->created_at->format('d F, Y H:i A') }}</td>
                                            <td class="actions">
                                               
                                                    <a href="{{ route('admin.pages.show',['id' => $page->id]) }}" class="btn btn-warning btn-sm" data-toggle="tooltip" alt="View setting" title="" data-original-title="View"><i class="fa fa-fw fa-eye"></i></a>

                                                    &nbsp;&nbsp;
                                                    <a href="{{ route('admin.pages.edit',['id' => $page->id]) }}" class="btn btn-primary btn-sm" data-toggle="tooltip" alt="Edit" title="" data-original-title="Edit"><i class="fa fa-edit"></i></a>

                                                     &nbsp;&nbsp;
                                                 

   <!--a href="javascript:void(0);" class="confirmDeleteBtn btn btn-danger btn-sm btn-flat" data-toggle="tooltip" alt="Delete cms Page" data-url="{{ route('admin.pages.delete', $page->id) }}" data-title="Delete cms Page"><i class="fa fa-trash"></i></a-->

                                               
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
                    </div>
                        </div>
                        <div class="box-footer clearfix">
                            {{ $pages->appends(Request::query())->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
@stop
