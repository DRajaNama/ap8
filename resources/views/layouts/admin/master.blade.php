<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('get.SYSTEM_APPLICATION_NAME') }} | @yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="{{ asset('storage/settings/' . config('get.MAIN_FAVICON')) }}" type="image/x-icon" rel="icon"/>
    <link href="{{ asset('storage/settings/' . config('get.MAIN_FAVICON')) }}" type="image/x-icon" rel="shortcut icon"/>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">

    <link rel="stylesheet" href="{{asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    <!-- jQuery Confirm -->
    <link rel="stylesheet" href="{{asset('plugins/jquery-confirm/dist/jquery-confirm.min.css')}}">
    <link rel="stylesheet" href="{{asset('bower_components/gritter/css/jquery.gritter.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
     <style>
     .required label::after {
            color: #cc0000;
            content: "*";
            font-weight: bold;
            margin-left: 5px;
        }
     </style>
    @yield('per_page_style')
</head>
<body class="sidebar-mini wysihtml5-supported skin-purple-light">
<div class="wrapper">

@include('layouts.admin.header')
<!-- Left side column. contains the logo and sidebar -->
@include('layouts.admin.sidebar')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    @yield('content')
</div>
<!-- /.content-wrapper -->

<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> {{ app()::VERSION }}
    </div>
    <strong>Copyright &copy; {{date("Y")}} <a href="{{url('/')}}">{{ config("get.SYSTEM_APPLICATION_NAME") }}</a>.</strong> All rights
    reserved.
</footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('bower_components/ckeditor/ckeditor.js')}}"></script>

<script src="{{asset('plugins/jquery-confirm/dist/jquery-confirm.min.js')}}"></script>
<script src="{{asset('bower_components/gritter/js/jquery.gritter.js')}}"></script>

<script src="{{asset('dist/js/demo.js')}}"></script>
<script src="{{asset('js/common.js')}}"></script>
<!-- jQuery Confirm -->
<script>
    if (typeof (Storage) !== "undefined") {
        if (localStorage.getItem('sidBarClass') != null) {
            $("body").addClass(localStorage.getItem('sidBarClass'));
        }
    }
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
  $(".sidebar-toggle").on("click", function () {
                if (typeof (Storage) !== "undefined") {
                    if ($('body').hasClass('sidebar-collapse')) {
                        localStorage.removeItem('sidBarClass');
                        console.log("exist");
                    } else {
                        localStorage.setItem('sidBarClass', 'sidebar-collapse');
                        console.log("add class");
                    }
                }
            });

</script>
@yield('per_page_script')


</body>
</html>
