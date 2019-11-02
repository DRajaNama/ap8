@extends('layouts.admin.master')
@section('title', !empty($testimonials) ? 'Edit Testimonial' : 'Add Testimonial')
@section('content')
@include('layouts.admin.flash.alert')


<style type="text/css">
    input[type=file]{
      display: inline;
    }

    #baanner_preview{
      border: 1px solid black;
      padding: 10px;
    }

    #baanner_preview img{
      width: 200px;
      padding: 5px;
    }
</style>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
       <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Manage Testimonial
                <small>Here you can {{ !empty($testimonials) ? 'edit' : 'add' }} Testimonial</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('admin/dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{route('data.testimonial')}}">{{ __("Testimonial") }}</a></li>
                <li><a href="javascript:void(0)" class="active">{{ !empty($testimonials) ? 'Edit Testimonial ' : 'Add Testimonial' }}</a></li>
            </ol>
        </section>
        <section class="content" data-table="testimonials">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info testimonials">

                        <div class="box-header with-border">
                            <h3 class="box-title">{{ !empty($testimonials) ? 'Edit Testimonial' : 'Add Testimonial' }}</h3>
                            <a href="{{route('data.testimonial')}}" class="btn btn-default pull-right" title="Cancel"><i
                                        class="fa fa-fw fa-chevron-circle-left"></i> Back</a></div>
                        <!-- /.box-header -->
                        @if(isset($testimonials))
                            {{ Form::model($testimonials, ['route' => ['data.testimonial.update', $testimonials->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) }}
                        @else
                         {{ Form::open(['route' => 'data.testimonial.store', 'enctype' => 'multipart/form-data']) }}
                        @endif
                             
                            <div class="box-body">
                                <div class="row">
                                        
                                    <div class="col-md-12">  
                                          <div class="form-group required {{ $errors->has('author') ? 'has-error' : '' }}">
                                             <div class="input text">
                                            <label for="author">Author</label>
                                            {{ Form::text('author', old('author'), ['class' => 'form-control','placeholder' => 'Enter author name']) }}
                                            @if($errors->has('author'))
                                            <span class="help-block">{{ $errors->first('author') }}</span>
                                            @endif
                                        </div>

                                    </div>


                                        <div class="form-group">
                                             <div class="input text">
                                            <label for="designation">Designation</label>
                                            {{ Form::text('designation', old('designation'), ['class' => 'form-control','placeholder' => 'Enter designation name']) }}
                                           
                                        </div>
                                        </div>


                                        <div class="form-group required {{ $errors->has('description') ? 'has-error' : '' }}" style="">
                                            <div class="input textarea">
                                                <label for="category_textarea">Author Feedback</label>
                                                {{ Form::textarea('description', old('description'), ['class' => 'form-control ckeditor','placeholder' => 'Provide Answer', 'rows' => 5]) }}
                                                @if($errors->has('description'))
                                                <span class="help-block">{{ $errors->first('description') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group required {{ $errors->has('status') ? 'has-error' : '' }}" style="">
                                        <div class="input select">
                                                <label for="status">Status</label>
                                                
                                                    <select id="status" name="status" class="form-control">
                                                    <option value="">Select status </option>
                                                    @if(isset($testimonials))
                                                    <option value="1" <?php if(isset($testimonials) && $testimonials->status == 1) { echo "selected"; } ?>>Active</option>
                                                    <option value="0" <?php if(isset($testimonials) && $testimonials->status == 0) { echo "selected"; }?>>InActive</option>
                                                    @else
                                                    <option value="1">Active</option>
                                                    <option value="0">InActive</option>
                                                    @endif
                                                    
                                                    </select>
                                            @if($errors->has('status'))
                                            <span class="help-block">{{ $errors->first('status') }}</span>
                                            @endif
                                           </div>
                                           </div>
                                          <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}" style="">                                            

                                            <div id="image_preview">
                                           
                                            @if(isset($testimonials))
                                             @if(empty($testimonials->image))
                                             <img src="{{asset('img/no_image.gif')}}" class="img-thumbnail"  style="max-height:100px;" alt="">
                                             @else
                                             <img src="{{ asset('uploads/testimonial-image/'.$testimonials->image) }}" style="width: 400px;">
                                             @endif
                                            @endif
                                               </div>

                                            <br/>


                                            <div class="input file">
                                                <label for="image_file">Upload Image</label>
                                                <input type="file" id="image" name="image"/>
                                                @if($errors->has('image'))
                                                <span class="help-block">{{ $errors->first('image') }}</span>
                                                @endif
                                            </div>
                                        </div>


                                        

                                    </div>
                                </div><!-- /.row -->
                            </div><!-- /.box-body -->
                            <div class="box-footer">
                                <button class="btn btn-primary btn-flat" title="Submit" type="submit"><i
                                            class="fa fa-fw fa-save"></i> Submit
                                </button>
                                <a href="{{route('data.testimonial')}}" class="btn btn-warning btn-flat" title="Cancel"><i class="fa fa-fw fa-chevron-circle-left"></i> Back</a>
                            </div>
                        {{ Form::close() }}
                    </div>
                </div>

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

</div>
</section>

@stop



