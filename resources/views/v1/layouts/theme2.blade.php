<!DOCTYPE html>
<html ng-app="HospitalConsole">
<head>
<?php
    $language = \Auth::user()->language;
    \App::setLocale($language);
//    dd(\App::getLocale());
 ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') </title>
    <link rel="icon" type="icon" href="{!! asset('favicon.ico') !!}">
    <link rel="stylesheet" href="{!! asset('css/vendor.css') !!}"/>
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}"/>
    <link rel="stylesheet" href="{!! asset('css/custom.css') !!}"/>
    <link rel="stylesheet" href="https://tawian.io/text-spinners/spinners.css">
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
          rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css"
          href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css"/>
    <link rel="stylesheet" href="{{ asset('custom/css/lightbox.min.css') }}"
          type="text/css">
    <link rel="stylesheet" href="{{ asset('custom/plugins/sweetalert/sweetalert.css')}}">
    <script>window.user = '<?php echo Auth::id(); ?>'; </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
    <script src="https://cdn.pubnub.com/sdk/javascript/pubnub.4.18.0.js"></script>
    <script src="https://cdn.pubnub.com/sdk/pubnub-angular/pubnub-angular-4.0.2.js"></script>
    <script src="{{asset("angular/library/angular-local-storage.min.js")}}"></script>
    <script src="{{asset("angular/mainpanel/MainPanelController.js")}}"></script>
    <script src="{{asset("angular/mainpanel/Services.js")}}"></script>
    <script src="{{asset("angular/common.js")}}"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    @yield('style')
</head>
<body class="top-navigation">
<!-- Wrapper-->
<div id="wrapper" ng-controller="InitApplication">
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
<script src="{{ asset('https://cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('custom/js/lightbox.min.js') }}"></script>
<script  src="{{ asset('js/dashboard.js') }}"></script>
<script src="{!! asset('custom/plugins/sweetalert/sweetalert.min.js') !!}"></script>
<script>

    function load_languages() {
        $.get("{{ url('/languages')}}")
            .done(function (data) {
                $('#raise_ticket_dialog').dialog(data['content'], data['title']);
            });
        return false;
    }

    function changeLanguage() {
       var selectedlanguage = $('#select_language').val();
        $.ajax({
            url: 'languageTranslation',
            data: { 'lang' : selectedlanguage,"_token": "{{ csrf_token() }}"},
            type: "post",
            cache: false,
            success: function (savingStatus) {
                console.log(savingStatus);
                toastr.success("Language changed successfully");
                $('#language_Select').dialog('close');

            },
            error: function (xhr, ajaxOptions, thrownError) {
                toastr.error("Error encountered while langugae translation");
            }
        });
    }

</script>
@section('scripts')
@show
</body>
</html>