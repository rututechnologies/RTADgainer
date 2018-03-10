<!DOCTYPE html>
<html>
<head>
<?php 
$locale = App::getLocale();
// dd($locale);
 ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') </title>
    <link rel="icon" type="icon" href="{!! asset('favicon.ico') !!}">
    <link rel="stylesheet" href="{!! asset('css/vendor.css') !!}"/>
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}"/>
    <link rel="stylesheet" href="{!! asset('css/custom.css') !!}"/>
    <link rel="stylesheet" href="http://tawian.io/text-spinners/spinners.css">
    <link href="{!! asset('css/plugins/footable/footable.core.css') !!}"
          rel="stylesheet">
    <link href="{!! asset('css/plugins/dataTables/datatables.min.css') !!}"
          rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('custom/css/responsive_style.css')}}">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('custom/css/animate.css') }}">
   
    <link rel="stylesheet"
          href="{{ asset('custom/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

    <link rel="stylesheet" type="text/css"
          href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
          rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('custom/css/lightbox.min.css') }}"
          type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    @yield('style')
</head>
<body class="top-navigation">
<!-- Wrapper-->
<div id="wrapper">
    <!-- Navigation -->

<!-- Page wraper -->
    <div id="page-wrapper" class="gray-bg">
        <!-- Page wrapper -->
    @include('v1.layouts.topnavbar')
    <!-- Main view animated bounceInRight -->
        @yield('content')
        <div id="common__modal_box" class="modal modal-fullscreen fade"
             role="dialog">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                </div>
            </div>
        </div>
    </div>
    <!-- End page wrapper-->
    <div id="Show_record"></div>
</div>
<!-- End wrapper-->
<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/custom_JS.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/plugins/footable/footable.all.min.js') !!}"></script>
<script src="{!! asset('js/plugins/dataTables/datatables.min.js') !!}"></script>
<!-- <script src="{!! asset('custom/plugins/metisMenu/jquery.metisMenu.js')!!}"></script> -->
<script type="text/javascript"
        src='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js'></script>
<script src="{{ asset('https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('custom/js/lightbox.min.js') }}"></script>
<script  src="{{ asset('js/dashboard.js') }}"></script>

@section('scripts')
@show
</body>
</html>