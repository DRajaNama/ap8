@extends('layouts.master')
@section('title','Quote List')
@section('content')
@include('layouts.admin.flash.alert')
@php
$qparams = app('request')->query();

@endphp


<!--innerbnr-->
<div class="inner-bnr" style="background:url('../img/html-images/myaccount-bnr-img.jpg') no-repeat;">
    <div class="container">
        <h1><span>My</span> Quotes</h1>
    </div>
</div>
<!--innerbnr-->
<!--breadcrumb-->
<div class="breadcrumb-outer">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{ url('/') }}"><b>Home</b></a></li>
            <li><span>My Quotes</span></li>
        </ul>
    </div>
</div>
<!--breadcrumb-->
<div class="main-content sm-pad h-auto">
        <div class="container">
                <div class="load-status">
                        <ul>
                            <li><img src="{{ url('img/html-images/star-icon.png')}}" alt="star">Favourite</li>
                            <li><img src="{{ url('img/html-images/new-icon.png')}}" alt="new">New Job</li>
                            <li><img src="{{ url('img/html-images/urgent-icon.png')}}" alt="urgent">Urgent (ASAP)</li>
                            <li><img src="{{ url('img/html-images/rtg-icon.png')}}" alt="rtg')}}">Ready To Go (RTG)</li>
                            <li><img src="{{ url('img/html-images/watch-icon.png')}}" alt="watch">Next 24/48hrs (24/48hrs)</li>
                            <li>
                                <a href="#"><img src="{{ url('img/html-images/view-icon.png')}}" alt="view">View Details</a>
                            </li>
                        </ul>
                    </div>
                    {{ Form::open(['url' => route('myQuotes', $qparams),'method' => 'get']) }}
                    <div class="load-filter quotes">
                       <div class="wd6">
                                {{ Form::select('status', ['' => 'All',1 => 'Active', 0 => 'Inactive'], app('request')->query('status'), ['class' => 'form-control']) }}
                        </div>
                        <div class="wd2">
                                {{ Form::select('pickup_id', ['' => 'Pickup State']+ $states, app('request')->query('pickup_id'), ['class' => 'form-control','empty'=>'select pickup state']) }}
                        </div>
                        <div class="wd2">
                                {{ Form::select('delivery_id', ['' => 'Delivery State']+ $states, app('request')->query('delivery_id'), ['class' => 'form-control','empty'=>'select delivery state']) }}
                        </div>
                        <div class="wd3">

                                {{ Form::select('cargo_category_id',['' => 'Select Cargo Category']+ $cargo_categories->pluck('title','id')->all(), app('request')->query('cargo_category_id'), ['class' => 'form-control']) }}
                        </div>
                        <div class="wd7">
                                {{ Form::text('keyword', app('request')->query('keyword'), ['class' => 'form-control','placeholder' => 'Keyword']) }}
                        </div>

                        <button class=" btn-lg btn-success filter" title="Search" type="submit"><i class="fa fa-filter"></i> Filter</button>
                      
                        <a href="{{ route('myQuotes') }}" class="refresh-btn"><img src="{{ url('img/html-images/reload-icon.png')}}" alt="refresh"></a>

                    </div>
                        {{ Form::close() }}


                <div class="load-list">
                        <div class="load-table">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th scope="col">Pickup Location</th>
                            <th scope="col">Delivery Location</th>
                            <th scope="col">Cargo Category</th>
                            <th scope="col">Model</th>
                            <th scope="col">Expire Date</th>
                            <th scope="col">Status</th>
                            <th scope="col" class="actions" style="">Actions</th>
                        </tr>
                        </thead>
                            @if($quotes->count() > 0)
                            <tbody>
                        @php
                        $i = (($quotes->currentPage() - 1) * ($quotes->perPage()) + 1)
                        @endphp
                        @foreach($quotes as $quote)
                            <tr class="row-{{ $quote->id }}">
                                <td> {{$i}}. </td>
                                <td>{{$quote->PickupSuburb->suburb }}</td>
                                <td>{{$quote->DeliverySuburb->suburb }}</td>
                                <td>{{$quote->CargoCategory->title }}</td>
                                <td>{{$quote->model }}</td>
                                <td>

                                      <span style="{{ ($quote->expire_date< date('d/m/Y') )?'color:red;':'' }}"> {{  $quote->expire_date }} </span>
                                </td>
                            <td> @if($quote->status===1)

                                     <span class="btn btn-success" >Active</span>

                                     @else

                                     <span class="btn btn-danger " >In-Active</span>
                                     @endif
                                </td>
                                <td class="actions">

                                        <a href="{{ route('quote.view',$quote->id)}}" class="btn btn-warning btn-sm" data-toggle="tooltip" alt="View quotes" title="" data-original-title="View"><i class="fa fa-fw fa-eye"></i></a>&nbsp;&nbsp;
                                        <a href="{{ route('quote.edit',$quote->id)}}" class="btn btn-primary btn-sm" data-toggle="tooltip" alt="Edit" title="" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                        &nbsp;&nbsp;
                                        @if(!empty($quote->quotations))
                                        <a href="{{ route('quote.quotations',$quote->id)}}" class="btn btn-warning btn-sm" data-toggle="tooltip" alt="View quotations" title="" data-original-title="View"><i class="fa fa-fw fa-quote-left"></i></a>
                                        @endif
                                        <a href="javascript:void(0);" class="confirmDeleteBtn btn btn-danger btn-sm btn-flat" data-toggle="tooltip" alt="quote" data-url="{{ route('quote.delete', $quote->id) }}" data-title="Delete Quote"><i class="fa fa-trash"></i></a>

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
                                <td colspan='8' align='center'> <strong>Record Not Available</strong> </td>
                            </tr>
                        </tfoot>
                        @endif
                    </table>
                    <div class="site-pagination">       {{ $quotes ->appends(Request::query())->links()}}</div>
                </div></div>
        </div>
    </div>

@stop
