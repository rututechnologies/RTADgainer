<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title') </title>

        <link rel="icon"  type="icon" href="{!! asset('favicon.ico') !!}">
        <link rel="stylesheet" href="{!! asset('css/vendor.css') !!}" />
        <link rel="stylesheet" href="{!! asset('css/app.css') !!}" />
        <link rel="stylesheet" href="{!! asset('css/custom.css') !!}" />
        <!--<link rel="stylesheet" href="http://tawian.io/text-spinners/spinners.css">-->
        <link href="{!! asset('css/plugins/footable/footable.core.css') !!}" rel="stylesheet">
        <link href="{!! asset('css/plugins/dataTables/datatables.min.css') !!}"
              rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css"
              rel="stylesheet"/>
        <link rel="stylesheet" href="{{ asset('custom/css/responsive_style.css')}}">
        <!-- Font Awesome -->
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">  <!--roboto css-->

        <link rel="stylesheet" href="{{ asset('custom/css/responsive_style.css')}}"> <!--custom css-->
        <link rel="stylesheet" href="{{ asset('custom/css/animate.css') }}">
        <!--animate css-->
        <!-- AdminLTE Skins. Choose a skin from the css/skins
            folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet"
              href="{{ asset('custom/dist/css/skins/_all-skins.min.css') }}">
        <!-- iCheck -->
        <link rel="stylesheet"
              href="{{ asset('custom/plugins/iCheck/flat/blue.css')}}">
        <!-- Morris chart -->
        <link rel="stylesheet"
              href="{{ asset('custom/plugins/morris/morris.css')}}">
        <!-- jvectormap -->
        <link rel="stylesheet"
              href="{{ asset('custom/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
        <!-- Date Picker -->
        <link rel="stylesheet" href="{{ asset('custom/plugins/datepicker/datepicker3.css')}}">
        <!-- Daterange picker
        <link rel="stylesheet"
              href="{{ asset('custom/plugins/daterangepicker/daterangepicker.css')}}"> -->
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet"
              href="{{ asset('custom/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
        <!-- toaster css -->
        <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel='stylesheet' type='text/css'>

        <!--adgainer style-->
        <link rel="stylesheet" href="{{ asset('css/adgainer.css')}}">

        @yield('style')
    </head>
    <body class=" mini-navbarr">

        <!-- Wrapper-->
        <div id="wrapper">

            <!-- Navigation -->
            @include('layouts.navigation')

            <!-- Page wraper -->
            <div id="page-wrapper" class="gray-bg">

                <!-- Page wrapper -->
                @include('layouts.topnavbar')

                <!-- Main view animated bounceInRight -->
                @yield('content')
                <div id="common__modal_box" class="modal modal-fullscreen fade" role="dialog">
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

        <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
        <script src="{{ asset('https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js') }}"></script>
        
        <!--datepicker js-->
        <script src="{{ asset('custom/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
        
        <!--qrcode js-->
        <script src="{{ asset('js/plugins/qrcode/jquery.qrcode.min.js')}}"></script>
        
        <!--adgainer script-->
        <script src="{{ asset('js/adgainer.js')}}"></script>
        
<script>
    $.fn.dialog = function(option,title=null) {

        if(typeof option === 'object' ){
            console.log(option.col_format);
            if(option.col_format=='lg')
                col_format=option['col_format'];
            else if(option.col_format=='md') {
                col_format = 'md';

            }else
                col_format = 'md';
            if(option.full_screen=='no')
                $('#common__modal_box').removeClass('modal-fullscreen ');

            $('#common__modal_box').modal({backdrop: 'static', keyboard: false});
            var html='<div class="modal-dialog modal-'+col_format+'"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title">'+option['title']+'</h4></div><div class="modal-body"></div></div></div>';

            $('#common__modal_box').html(html);
            $('#common__modal_box').find('.modal-content > .modal-body').html(option['content']);
        }else if(option=='close'){
            $('#common__modal_box').modal('hide');

        }else{

            col_format='lg';
            $('#common__modal_box').modal({backdrop: 'static', keyboard: false});
            var html='<div class="modal-dialog modal-'+col_format+'"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title">'+title+'</h4></div><div class="modal-body"></div></div></div>';
            $('#common__modal_box').html(html);
            $('#common__modal_box').find('.modal-content > .modal-body').html(option);
        }

    };
$(document).ready(function() {

        $('.footable').footable({
            "paging": {
                "limit": 3,
            }
});


    });
    $(document).ready(function(){
        // Open close right sidebar
        $('.right-sidebar-toggle').on('click', function () {
            $('#right-sidebar').toggleClass('sidebar-open');
        });

        // Initialize slimscroll for right sidebar
        $('.sidebar-container').slimScroll({
            height: '100%',
            railOpacity: 0.4,
            wheelStep: 10
        });
        $('.right-sidebar2-toggle').on('click', function () {
            $('#right-sidebar2').toggleClass('sidebar-open');
        });
    });
    $(document).ready(function(){
        $('.dataTables-example').DataTable({
            pageLength: 25,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                {
                    extend: 'copy',
                    exportOptions: {
                        columns: "thead th:not(.noExport)"
                    }
                },
                {
                    extend: 'csv',
                    exportOptions: {
                        columns: "thead th:not(.noExport)"
                    }
                },
                {extend: 'excel',
                    exportOptions: {
                        columns: "thead th:not(.noExport)"
                    }

                },
                {extend: 'pdf',
                    exportOptions: {
                        columns: "thead th:not(.noExport)"
                    }
                },

                {extend: 'print',
                    exportOptions: {
                        columns: "thead th:not(.noExport)"
                    },
                    customize: function (win){
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
                    }
                }
            ]

        });

    });
        </script>
<script type='text/javascript'>
    $(function(){
        $("#adv_search_btn").click(function(e){
            e.preventDefault();
            $("#advance_search").toggle();
        });
    })
</script>
<script type="text/javascript">
    function load_languages() {
        $.get("{{ url('/languages')}}")
            .done(function (data) {
                $('#raise_ticket_dialog').dialog(data['content'],'Change ' +
                    'Language');
            });
        return false;
    }
    function changeLanguage() {
        var language_selected = $('#select_language').val();
        toastr.error('You selected ' + language_selected);
    }



    $( document ).ajaxStart(function() {
        toastr.options = {
            timeOut: 0,
            extendedTimeOut: 0,
            tapToDismiss: false
        };
        toastr.info('Processing...');
    });

    $( document ).ajaxError(function( event, jqxhr, settings, thrownError) {
        $errors = jqxhr.responseJSON;

        console.log($errors);
        errorsHtml = '<ul>';
        $.each( $errors, function( key, value ){
            console.log(key);
            errorsHtml += '<li>' + value[0] + '</li>'; //showing only the first error.
        });
        errorsHtml += '</ul>';
        console.log(errorsHtml);
        toastr.warning(errorsHtml);
        toastr.remove();

    });
    $( document ).ajaxSuccess(function(data) {
        toastr.success('Success');
        toastr.remove();
    });

</script>
        @section('scripts')
        @show

    </body>
</html>