@extends('layouts.master')
@section('title',$page->title)
@section('content')
@include('layouts.admin.flash.alert')
<div class="main-content">
    <div class="container">
    
    <h2 class="bdr">{{ $page->title }}</h2>
    <p>{{ $page->short_description }}</p>
    
    <div class="faq-box">
    <div class="accordion" id="accordionExample">
        @php 
         $temp=1; 
        @endphp
      
        @foreach($faqs as $item)
        @php  
          $heading = 'heading'.$temp; 
          $collapse = 'collapse'.$temp; 
         
          @endphp
    <div class="card">
    <div class="card-header" id="{{ $heading }}">
    <button class="btn btn-link  {{ ($temp==1)?'':'collapsed' }}" type="button" data-toggle="collapse" data-target="#{{ $collapse }}" aria-expanded="{{ ($temp==1)?'true':'false' }}" aria-controls="{{ $collapse }}"><i>Q</i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </button>
    </div>
    <div id="{{ $collapse }}" class="collapse {{ ($temp==1)?'show':'' }}" aria-labelledby="{{ $heading }}" data-parent="#accordionExample">
    <div class="card-body">
    <p>Nunc finibus nulla nibh, vitae pellentesque ligula auctor in. Pellentesque est massa, ullamcorper eu lacinia in, rhoncus quis purus. Fusce quis molestie mi. Sed porta convallis urna sit amet ultrices. Praesent pretium nibh a magna scelerisque, vel ullamcorper ligula pellentesque. Donec et ullamcorper risus. Mauris pretium suscipit leo et pellentesque. Nullam at pellentesque ligula. Mauris eget ante pulvinar, cursus massa ut, scelerisque felis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed vitae feugiat urna.</p>
    </div>
    </div>
    </div>
    @php     $temp++; @endphp
    @endforeach
    
    </div>
    </div>
    
    </div>
    </div>


@stop
